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
    <meta http-equiv="content-language" content="ua">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="офісні меблі рівне, офісні меблі на замовлення Рівне, корпусні меблі для офісу рівне, купить меблі для офісу рівне,
        замовити меблі для офісу рівне, виготовлення меблів для офісу у Рівному"/>
    <meta name="description" content="Офісні меблі за індивідуальним замовленням клієнта має багато переваг. Виготовлення меблів у місті Рівному - Вест меблі">
    <title><?php echo $lang->lang_ua['office_main_title'][0]; ?></title>
    <?php include_once "css_links.php"?>

</head>
<body>
<?php include_once "../php/header.php" ?>


<section xmlns:background-image="http://www.w3.org/1999/xhtml">
    <div class="container gallery">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="gallery_header">Категорія</div>
                <nav class="nav-sidebar">   <!-- left slidebar navigation-->
                    <ul class="nav tabs">
                        <?php for ($i = 0; $i<7; $i++){?>
                            <li><a href="<?php echo $lang->lang_ua['gallery_nav_a_href'][$i];?>"><?php echo $lang->lang_ua['gallery_nav_sidebar'][$i]; ?></a></li>
                        <?php }?>
                    </ul>
                </nav>
                <?php include_once "../configure/uptolikebutton.php"?>
            </div>
            <!-- tab content -->
            <div class="col-md-9 col-sm-8">
                <div class="top-content">
                    <div class="header"><h1><?php echo $lang->lang_ua['office_top_content_h1'][0]?></h1></div>
                    <div class="content">
                        <?php foreach ($lang->lang_ua['office_top_content_content'] as $value ){?>
                            <p><?php echo $value; ?></p>
                        <?php }?>
                    </div>
                </div>
                <div class="image-content">
                    <div class="tab-content" id="tab-content">
                        <?php include_once "../actions/get_image.php"; ?>
                    </div>
                </div>
                <div class="bottom-content">
                    <h2><?php echo $lang->lang_ua['office_bottom_content_h1'][0]; ?></h2>
                    <?php foreach ($lang->lang_ua['office_bottom_content_p'] as $value ){?>
                        <p><?php echo $value; ?></p>
                    <?php }?>
                </div>
            </div>

        </div><!-- end col -->
    </div><!-- container-->
</section>

<?php  include "../php/footer.php"?>
<?php include_once "js_links.php"?>
</body>
</html>

