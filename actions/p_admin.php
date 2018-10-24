<?php

if($_GET['p'] == 'category'){
    //$smarty->assign('config', $config);

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
}
else {
    //$smarty->assign('config', $config);

    $smarty->assign('category', $oTraitList->getAllCategory());
    $content = $smarty->fetch('templates/admin/category.tpl');
}