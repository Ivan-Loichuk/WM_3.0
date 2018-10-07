<?php

require_once 'libs/smarty/Smarty.class.php';
require_once 'languages/lang_ua.php';
include_once "classes/Image.php";
include_once "classes/Common.php";
require_once  'configure/config.php';

$GLOBALS['lang'] = $lang;
$smarty = new Smarty();
$oImage = new Image();
$oCommon = new Common();
$error = null;

$title = "";
$description = "";
$keywords = "";
$content = "";

require 'actions/p.php';

//$smarty->assign('images', $aImages);
$smarty->assign('config', $config);
$smarty->assign('content', $content);

$smarty->assign('title', $title);
$smarty->assign('description', $description);
$smarty->assign('keywords', $keywords);
$smarty->assign('lang', $lang);


$smarty->display('templates/index.tpl');
//header("Location: korpusni-mebli-na-zamowlenia");