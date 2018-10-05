<?php
session_start();
$menu = "menu2";
include_once "../languages/lang_ua.php";
include_once "../configure/jandex_metrika.php";
include_once("../configure/analyticstracking.php");
$lang = new lang_ua();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="галерея меблів,кухні, спальні, шафи-купе, шафи купе, стінки, офісні меблі, фотогалерея "/>
    <meta name="description" content="Ми виконуємо замовлення різної складності – від полички до масштабних об’єктів, будь-які нестандартні корпусні меблі:
     сучасні кухні, кухні з вмонтованою технікою, класичні кухні, шафи-купе, спальні, прихожі, офісні меблі та ін.">
    <title><?php echo $lang->lang_ua['gallery_main_title']; ?></title>
    <?php include_once "css_links.php"?>

</head>
<body>
<?php include_once "../configure/facebook_plugin.php";?>
<?php include_once "../php/header.php" ?>

<?php if(isset($_SESSION['logged_user'])) : ?>

<!--    add images in gallery (form) -->
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div id="add_images">
                   <!-- Modal window -->
                   <div class="modal" id="modal-add-image">
                       <div class="modal-box">
                           <div class="modal-header">
                               <div class="close-modal">&#10006;</div>
                               <p>Опції додання</p>
                           </div>
                           <div class="modal-body">
                               <form action="../actions/add-image.php" method="post" enctype="multipart/form-data">
                                    <span class="btn btn-default btn-file">
                                        Фото<input type="file" name="file" class="ed">
                                    </span>
                                     <label for="checkbox" id="watermark_label">Додати водяний знак &nbsp&nbsp&nbsp<input type="checkbox" name="watermark" id="watermark"/></label>


                                   <input name="name" type="text" class="ed brnu" id="img_name" placeholder="Назва картинки"/>
                                   <input name="alt" type="text" class="ed brnu" id="img_alt" placeholder="Альтернативний опис"/>
                                   <select id="img_category" name="img_category">
                                       <?php foreach ($lang->lang_ua['gallery_nav_sidebar'] as $key => $select_item){?>
                                           <option value="<?php echo $key; ?>" <?php if($key == 0) echo 'selected="selected"'; ?>> <?php echo $select_item; ?></option>
                                       <?php }?>
                                   </select>
                                   <textarea class="hover_box_info" id="img_hover_box_info" rows="3" cols="158" name="hover_box_info" placeholder="Коротка інформація про продукт, висвітлюється при наведені мишкою на зображення(не обовязково)"></textarea>
                                   <input type="text" class="ed brnu" id="redirect_page_link" name="redirect_page_link" placeholder="Адрес сторінки до перенаправлення(Не обовязково)">
                                   <input type="submit" name="Submit" value="Додати" id="submit_add_foto"/>
                                  </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <?php
       if($_SESSION['errors'] != null){
         if($_SESSION['errors'] == "Фото доданo)"){
             echo '<div id="errors" style="color: #1db30a;">' .  $_SESSION['errors'] . '</div><hr style="background-color: #1db30a;">';
             $_SESSION['errors'] = null;
         }
         else{
             echo '<div id="errors"style="color: red;">' .  $_SESSION['errors'] . '</div><hr>';
             $_SESSION['errors'] = null;
         }
       }
       ?>
   </div>

<?php else :?>
<?php endif; ?>

<section xmlns:background-image="http://www.w3.org/1999/xhtml">
    <div class="container gallery">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="gallery_header">Категорія</div>
                <nav class="nav-sidebar">   <!-- left slidebar navigation-->
                    <ul class="nav tabs">
                        <?php foreach ($lang->lang_ua['gallery_nav_sidebar'] as $key => $nav_item){?>
                            <li><input type="button" value="<?php echo $nav_item; ?>" onClick="<?php echo "getContent($key)"?>"/></li>
                        <?php }?>
                    </ul>
                </nav>
                <?php if(isset($_SESSION['logged_user'])) : ?>
                <!-- add image button -->
                <button type="button" class="modal-trigger btn btn-default" data-modal="modal-add-image">Додати фото</button><!-- Trigger Modal. -->
                <?php else :?>
                <?php endif; ?>
            </div>
            <!-- tab content -->
            <div class="col-md-9 col-sm-8">
                <div class="image_header">Тут ви можете переглянути галерею наших робіт.</div>
                <div class="tab-content" id="tab-content">

                </div>
            </div>

        </div><!-- end col -->
    </div><!-- container-->
</section>
<?php  include "../php/footer.php"?>
<?php include_once "js_links.php"?>
<script type="text/javascript">
    ( function( $ ) {

        $( '.swipebox' ).swipebox();

    } )( jQuery );
</script>

<script>
    $(document).ready(function() {
<?php
        if(isset($_GET['type'])){
            if($_GET['type'] == "szafy-kupe"){ echo 'getContent(0)'; }
            if($_GET['type'] == "mebli-dla-kuhni"){ echo 'getContent(1)'; }
            if($_GET['type'] == "mebli-dla-spalni"){ echo 'getContent(2)'; }
            if($_GET['type'] == "mebli-w-dytiachu-kimnatu"){ echo 'getContent(3)'; }
            if($_GET['type'] == "mebli-rizne"){ echo 'getContent(4)'; }
            if($_GET['type'] == "ofisni-mebli"){ echo 'getContent(5)'; }
            if($_GET['type'] == "matrasy"){ echo 'getContent(6)'; }
        }
        else { echo 'getContent(0)'; }
?>
    });
</script>
</body>
</html>
