<?php
#ini_set('display_errors', 1);
require_once 'libs/smarty/Smarty.class.php';
require_once 'languages/lang_ua.php';
include_once "classes/Image.php";

$smarty = new Smarty();
$oImage = new Image();
$error = null;

require 'actions/p_admin.php';


if(!isset($error)){

    $smarty->assign('title', "");
    $smarty->assign('description', "");
    $smarty->assign('keywords', "");
    $smarty->assign('lang', $lang);
}else{
    $smarty->assign('error', $error);
}


$smarty->display('templates/admin.tpl');
//header("Location: korpusni-mebli-na-zamowlenia");