<?php
$_GET['p'] = (isset($_GET['p']) ?  $_GET['p'] : "");

if($_GET['p'] == 'addImage'){
    if( isset( $_POST['submit']) ){
        $_SESSION['errors'] = null;
        $errors = $oImage->addImage( $_POST );
        $_SESSION['errors'] = $errors;
    }
    $category = array_flip($oTraitList->getAllCategory());
    header('Location: admin.php?p='. $category[$_POST['img_category']]);
}elseif ( $_GET['p'] == 'delete_image' ){
    $oImage->deleteImage( $_POST['id'] );

}elseif ( $_GET['p'] == "getImagesAsync"){

    $aImages = $oImage->getImages($_POST['id']);
    $smarty->assign('config', $config);
    $smarty->assign('images', $aImages);

    $smarty->display('templates/admin/image_list.tpl');
    exit;
}elseif ($_GET['p'] == "login"){
    if($oCommon->login()){
        header('Location: admin.php?p=cabinets');
    }
    $content = $smarty->fetch('templates/admin/login.tpl');
}
elseif ($_GET['p'] == "logout"){
    $oCommon->logout();
}elseif ($_GET['p'] == "delete_image_async"){
    $oImage->deleteImage($_POST['id']);
    exit;
}elseif( array_key_exists($_GET['p'], $oTraitList->getAllCategory())){

    $smarty->assign('lang', $GLOBALS['lang']);
    $smarty->assign('category', $oTraitList->getAllCategory());
    $aImages = $oImage->getImages($oTraitList->getCategory($_GET['p']));
    $smarty->assign('config', $config);
    $smarty->assign('images', $aImages);
    $smarty->assign('errors', isset($_SESSION['errors']) ? $_SESSION['errors'] : null);
    unset($_SESSION['errors']);
    $content = $smarty->fetch('templates/admin/image_list.tpl');
}
else{
    $smarty->assign('lang', $GLOBALS['lang']);
    $smarty->assign('category', $oTraitList->getAllCategory());
    $content = "";
}