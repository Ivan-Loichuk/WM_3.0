<?php
include_once "configure/db.php";
include_once "classes/Trait_category_list.php";
include_once 'classes/Watermark.php';

class Image
{
    use Trait_category_list;

    function getImages($id)
    {
        $result = R::getAll("SELECT * FROM photos where id_kategorii = ". $this->categoty_list[$id] ." ORDER BY id DESC");

        if(empty($result) == true){
            echo "Галерея пуста!! <br>Вибачте за тимчасові незручності =)";
            exit;
        }

        $result = $this->groupImages($result);

        return $result;
    }
    function groupImages($result){
        $i = 0;
        $index = 0;
        $group_result = null;
        foreach ($result as $image){
            if($i == 3){
                $index++;
                $i = 0;
            }else{
                $group_result[$index][] = $image;
                $i++;
            }
        }

        return $group_result;
    }
    function addImage( $data ){
        $errors = null;
        $type = null;
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            $typ = $_FILES['file']['type'];
            if ($typ == 'image/jpeg' || $typ == 'image/jpg' || $typ == 'image/png') {
                if (@getimagesize($_FILES["file"]["tmp_name"]) !== false) {
                    if ($_FILES['file']['size'] < 5000000) {
                        if(isset($data['img_category'])){

                            $location = "../img/foto_original/" . $_FILES["file"]["name"];
                            $location_mini = "../img/miniaturki/mini-" . $_FILES["file"]["name"];
                            $location_resize = "../img/foto_resize/" . $_FILES["file"]["name"];

                            if (R::count('photos', "location = ? ", array("img/foto_original/" . $_FILES["file"]["name"])) > 0) {
                                $errors = $GLOBALS['lang']['add_image_errors'][0];
                            }
                            if (empty($errors)) {

                                $file = $_FILES['file']['tmp_name'];
                                $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                                $image_name = addslashes($_FILES['file']['name']);
                                move_uploaded_file($file, "../img/foto_original/" . $image_name);

                                list($width, $height) = getimagesize($location);
                                if($width > 5470 || $height > 3640){
                                    $percent = 0.2;
                                }
                                elseif($width > 4600 || $height > 3070){
                                    $percent = 0.3;
                                }
                                elseif($width > 2560 || $height > 2000){
                                    $percent = 0.4;
                                }
                                elseif($width > 1700 || $height > 1480){
                                    $percent = 0.5;
                                }
                                elseif($width > 1366 || $height > 900){
                                    $percent = 0.7;
                                }
                                elseif($width > 1280 || $height > 1080) {
                                    $percent = 0.9;
                                }
                                else{
                                    $percent = 1;
                                }

                                $newwidth = $width * $percent;
                                $newheight = $height * $percent;

                                $thumb = imagecreatetruecolor($newwidth, $newheight);
                                $source = imagecreatefromjpeg($location);
                                imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                                imagejpeg($thumb, $location_resize, 70);

                                $nowe = imagecreatetruecolor(430, 270);
                                $list = list($width, $height, $type, $attr) = getimagesize("../img/foto_original/" . $image_name);
                                $obraz = imagecreatefromjpeg($location);

                                if ($width > $height) {
                                    imagecopyresized($nowe, $obraz, 0, 0, 0, 0, 430, 270, $width, $height);
                                } else {
                                    imagecopyresized($nowe, $obraz, 0, 0, 0, 0, 430, 270, $width, $height - 500);
                                }
                                imagejpeg($nowe, $location_mini, 70);
                                imagedestroy($nowe);

                                if(isset($data['watermark'])) {
                                    $watermark = Watermark::getInstance();
                                    $watermark->addWatermark($location_resize, '../img/watermark.png', 'br', null);
                                }
                                $location = "img/foto_original/" . $_FILES["file"]["name"];
                                $location_resize = "img/foto_resize/" . $_FILES["file"]["name"];
                                $location_mini = "img/miniaturki/mini-" . $_FILES["file"]["name"];

                                $photos = R::dispense('photos');
                                $photos->id = "";
                                $photos->location = $location;
                                $photos->location_mini = $location_mini;
                                $photos->location_resize = $location_resize;
                                $photos->name_photo = $data['name'];
                                $photos->alt = $data['alt'];
                                $photos->id_kategorii = $data['img_category'];
                                $photos->redirect_page_link = $data['redirect_page_link'];

                                if(trim($data['hover_box_info']) != "") {
                                    $photos->hover_box_info = $data['hover_box_info'];
                                }
                                else $photos->hover_box_info = NULL;
                                R::store($photos);

                                $errors = $GLOBALS['lang']['add_image_errors'][1];
                            }
                            else $_SESSION['errors'] = $errors;
                        }
                        else $errors = $GLOBALS['lang']['add_image_errors'][2];
                    }
                    else $errors = $GLOBALS['lang']['add_image_errors'][3];
                }
                else $errors = $GLOBALS['lang']['add_image_errors'][4];
            }
            else $errors = $GLOBALS['lang']['add_image_errors'][4];
        }
        else $errors = $GLOBALS['lang']['add_image_errors'][5];

        return $errors;
    }
    function deleteImage( $id ){

        $deleteItem = htmlspecialchars(addslashes(strip_tags(trim($id))));
        $result = R::getAll("SELECT * FROM photos where id=".$deleteItem);
        if(isset($result)) {
            foreach ($result as $row) {
                unlink('../' . $row['location']);
                unlink('../' . $row['location_mini']);
                unlink('../' . $row['location_resize']);
            }
            $result = R::getAll("DELETE  FROM photos WHERE id=" . $deleteItem);
        }

        return 0;
    }

}