<?php
#ini_set('display_errors', 1);
require_once 'libs/smarty/Smarty.class.php';
require_once 'languages/lang_ua.php';
include_once "classes/Image.php";
require_once  'configure/config.php';
include_once "classes/Trait_category_list.php";

$smarty = new Smarty();
$oImage = new Image();
$error = null;
$oTraitList = new Trait_category_list;
$content = "";

require 'actions/p_admin.php';


//$smarty->assign('images', $aImages);
$smarty->assign('categoru', $oTraitList->getAllCategory());
$smarty->assign('config', $config);
$smarty->assign('content', $content);

$smarty->display('templates/admin/index.tpl');
//header("Location: korpusni-mebli-na-zamowlenia");