<?php
$_GET['p'] = (isset($_GET['p']) ?  $_GET['p'] : "");

if($_GET['p'] == 'category'){

    $smarty->assign('category', $oTraitList->getAllCategory());
    $content = $smarty->fetch('templates/admin/category.tpl');

}elseif ($_GET['p'] == 'add_image'){

    if( isset( $_POST['submit']) ){
        $errors = $oImage->addImage( $_POST );
        $_SESSION['errors'] = $errors;
    }

    //header('Location: ../korpusni-mebli-na-zamowlenia/katalog?type='.$type);
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
        header('Location: admin.php');
    }
    $content = $smarty->fetch('templates/admin/login.tpl');
}
elseif ($_GET['p'] == "logout"){
    $oCommon->logout();
}elseif ($_GET['p'] == "delete_image_async"){
    $oImage->deleteImage($_POST['id']);
    exit;
}
else {
    $smarty->assign('category', $oTraitList->getAllCategory());
    $content = $smarty->fetch('templates/admin/category.tpl');
}