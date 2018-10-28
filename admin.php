<?php
#ini_set('display_errors', 1);

require 'configure/config_loader.php';
#ini_set('display_errors', 1);
$GLOBALS['config'] = $config;
$GLOBALS['lang'] = $lang;
$smarty = new Smarty();
$oImage = new Image();
$oCommon = new Common();
$error = null;
$oTraitList = new Trait_category_list;
$content = "";
isset($_COOKIE['error_message']) ? ($_COOKIE['error_message'] = null) : "";

require 'actions/p_admin.php';
if(!isset($_SESSION['logged_user'])){
    return $smarty->display('templates/admin/login.tpl');
}




//$smarty->assign('images', $aImages);
$smarty->assign('category', $oTraitList->getAllCategory());
$smarty->assign('config', $config);
$smarty->assign('content', $content);
$smarty->assign('lang', $GLOBALS['lang']);

$smarty->display('templates/admin/index.tpl');
//header("Location: korpusni-mebli-na-zamowlenia");