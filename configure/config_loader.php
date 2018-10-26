<?php

if(!isset($_SESSION))
{
    session_start();
}


include_once 'libs/smarty/Smarty.class.php';
include_once 'languages/lang_ua.php';
include_once "classes/Image.php";
include_once "classes/Common.php";
include_once  'configure/config.php';
include_once "classes/Trait_category_list.php";
