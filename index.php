<?php

require "configure/config_loader.php";

#ini_set('display_errors', 1);
$GLOBALS['lang'] = $lang;
$GLOBALS['config'] = $config;
$smarty = new Smarty();
$oImage = new Image();
$oCommon = new Common();
$oTraitList = new Trait_category_list;
$error = null;

$title = $GLOBALS['lang']['index_main_title'];
$description = $GLOBALS['lang']['default_description'];
$keywords = $GLOBALS['lang']['default_keywords'];
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