<?php

if($_GET['p'] == 'home'){


}elseif ($_GET['p'] == 'add_image'){

    if( isset( $_POST['submit']) ){
        $errors = $oImage->addImage( $_POST );
        $_SESSION['errors'] = $errors;
    }

    //header('Location: ../korpusni-mebli-na-zamowlenia/katalog?type='.$type);
}elseif ( $_GET['p'] == 'delete_image' ){
    $oImage->deleteImage( $_POST['id'] );

}else {
    $error = "Bad request!!!";
}