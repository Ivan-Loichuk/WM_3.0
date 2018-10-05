<?php

class Watermark
{
    var $iQuality = 80;
    static function &getInstance()
    {
        static $oInstance = null;
        if (!isset($oInstance)) {
            $oInstance = new Watermark();
        }
        return $oInstance;
    }

    function throwExtOfFile($sName)
    {
        $aExp = pathinfo($sName);
        return $aExp['extension'];
    }

    function checkCorrectFile($sFileName, $exts = 'gif|jpeg|jpg|png')
    {
        return preg_match('/^(' . $exts . ')$/', mb_strtolower($this->throwExtOfFile($sFileName), 'UTF-8'));
    }

    function addWatermark($sFileName, $sWatermarkFileName, $sWatermarkPos, $iQuality)
    {
        if ($this->checkCorrectFile($sFileName, 'gif|jpeg|jpg|png') == 0) return null;
        if (!isset($iQuality) || !is_numeric($iQuality)) $iQuality = $this->iQuality;
        $sImgExt = $this->throwExtOfFile($sFileName);
        $aImgProperties = GetImageSize($sFileName);

        switch ($sImgExt) {
            case 'gif':
                $mImgCreate = ImageCreateFromGIF($sFileName);
                if (!$mImgCreate) {
                    $mImgCreate = ImageCreateFromPNG($sFileName);
                    $sImgExt = 'png';
                }
                if (!$mImgCreate) {
                    $mImgCreate = ImageCreateFromJPEG($sFileName);
                    $sImgExt = 'jpg';
                }
                break;
            case 'jpeg':
            case 'jpg':
                $mImgCreate = ImageCreateFromJPEG($sFileName);
                if (!$mImgCreate) {
                    $mImgCreate = ImageCreateFromPNG($sFileName);
                    $sImgExt = 'png';
                }
                if (!$mImgCreate) {
                    $mImgCreate = ImageCreateFromGIF($sFileName);
                    $sImgExt = 'gif';
                }
                break;
            case 'png':
                $mImgCreate = ImageCreateFromPNG($sFileName);
                if (!$mImgCreate) {
                    $mImgCreate = ImageCreateFromGIF($sFileName);
                    $sImgExt = 'gif';
                }
                if (!$mImgCreate) {
                    $mImgCreate = ImageCreateFromJPEG($sFileName);
                    $sImgExt = 'jpg';
                }
                break;
        }

        $photo_width = $aImgProperties[0];
        $photo_height = $aImgProperties[1];

        ImageAlphaBlending($mImgCreate, true);

        $mImgDest = imagecreatetruecolor($photo_width, $photo_height);
        imagecopyresized($mImgDest, $mImgCreate, 0, 0, 0, 0, $photo_width, $photo_height, $photo_width, $photo_height);

        $logo_size = getimagesize($sWatermarkFileName);
        $logo_width = $logo_size[0];
        $logo_height = $logo_size[1];

        $logo_image = ImageCreateFromPNG($sWatermarkFileName);

        if ($photo_width >= $logo_width && $photo_height >= $logo_height) {
            switch ($sWatermarkPos) {
                case 'tl':
                    $posx = 0;
                    $posy = 0;
                    break;
                case 'tr':
                    $posx = $photo_width - $logo_width;
                    $posy = 0;
                    break;
                case 'bl':
                    $posx = 0;
                    $posy = $photo_height - $logo_height;
                    break;
                case 'br':
                    $posx = $photo_width - $logo_width;
                    $posy = $photo_height - $logo_height;
                    break;
                default: //center
                    $posx = floor(($photo_width - $logo_width) / 2);
                    $posy = floor(($photo_height - $logo_height) / 2);
                    break;
            }
            $result = ImageCopy($mImgDest, $logo_image, $posx, $posy, 0, 0, $logo_width, $logo_height);
        } else {
            $ratio = min(($photo_width / $logo_width), ($photo_height / $logo_height));
            $logo_width_res = floor($logo_width * $ratio);
            $logo_height_res = floor($logo_height * $ratio);

            switch ($sWatermarkPos) {
                case 'tl':
                    $posx = 0;
                    $posy = 0;
                    break;
                case 'tr':
                    $posx = $photo_width - $logo_width_res;
                    $posy = 0;
                    break;
                case 'bl':
                    $posx = 0;
                    $posy = $photo_height - $logo_height_res;
                    break;
                case 'br':
                    $posx = $photo_width - $logo_width_res;
                    $posy = $photo_height - $logo_height_res;
                    break;
                default: //center
                    $posx = floor(($photo_width - $logo_width_res) / 2);
                    $posy = floor(($photo_height - $logo_height_res) / 2);
                    break;
            }

            $sCreateFunction = 'imagecopyresampled';
            if (!function_exists($sCreateFunction)) $sCreateFunction = 'imagecopyresized';
            $result = $sCreateFunction($mImgDest, $logo_image, $posx, $posy, 0, 0, $logo_width_res + 1, $logo_height_res + 1, $logo_width, $logo_height);
        }

        ImageDestroy($logo_image);

        if ($result) {
            imagedestroy($mImgCreate);
            if (!is_file($sFileName)) {
                touch($sFileName);
                chmod($sFileName, 0666);
            }
            switch ($sImgExt) {
                case 'gif':
                    if (function_exists("imagegif")) $Image = ImageGIF($mImgDest, $sFileName);
                    else {
                        if ($iQuality > 0) $iQuality = floor(($iQuality - 1) / 10);
                        $Image = ImagePNG($mImgDest, $sFileName, $iQuality);
                    }
                    break;
                case 'jpeg':
                case 'jpg':
                    $Image = ImageJPEG($mImgDest, $sFileName, $iQuality);
                    break;
                case 'png':
                    // turning on alpha channel information saving (to ensure the full range of transparency is preserved)
                    imagesavealpha($mImgDest, true);
                    $Image = ImagePNG($mImgDest, $sFileName);
                    break;
            }
            if ($Image) {
                imagedestroy($mImgDest);
                return $sFileName;
            }
            imagedestroy($mImgDest);
        } else {
            imagedestroy($mImgCreate);
            imagedestroy($mImgDest);
            return null;
        }
        return null;
    }
}