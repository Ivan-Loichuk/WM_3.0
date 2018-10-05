<?php

require_once 'libs/smarty/Smarty.class.php';
require_once 'languages/lang_ua.php';
include_once "classes/Image.php";

$smarty = new Smarty();
$oImage = new Image();
$error = null;

$title = "";
$description = "";
$keywords = "";

require 'actions/p.php';

$smarty->assign('images', $aImages);
$smarty->assign('title', $title);
$smarty->assign('description', $description);
$smarty->assign('keywords', $keywords);
$smarty->assign('lang', $lang);


$smarty->display('templates/index.tpl');
//header("Location: korpusni-mebli-na-zamowlenia");