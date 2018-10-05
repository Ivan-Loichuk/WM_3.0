<?php
$data = $_POST;
$_GET['type'] = "lang_ua";

include_once '../languages/lang_ua.php';
include_once "../configure/jandex_metrika.php";
include_once("../configure/analyticstracking.php");
$lang = new lang_ua();
?>
<!DOCTYPE html>
<html lang="uk-ua">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <meta name="statvooVerification" content="5e1274be5b06e1111f0a74b8abf7ccb6" />

    <meta name="description" content="У нас можна зробити індивідуальне замовлення на будь-які нестандартні корпусні меблі: сучасні кухні, кухні з вмонтованою технікою, класичні кухні, шафи-купе, спальні, прихожі, офісні меблі та ін. ">
    <meta name="keywords" content="меблі на замовлення рівне, корпусні меблі рівне, вест меблі рівне, меблі виготовлення рівне, корпусні меблі виготовлення рівне,
        замовити меблі у рівному, замовити корпусні меблі у рівному, купить меблі рівне купить корпусні меблі рівне, west mebli rivne, виготовлення меблів рівне, виготовлення корпусних меблів у Рівному">
    
    <title><?php echo $lang->lang_ua['index_main_title']?></title>
    <!-- Latest compiled and minified CSS -->

    <?php include_once "css_links.php"?>
</head>
<body>
<?php

     //initialization links to section in index page
  $lang->lang_ua['navigation_items_a_href'] = array('#header', '#galeria', '#order', '#about_us', '#contact_us');
  $menu = "menu";
include "header.php"
?>
<!--  main slider-->
<section id="carousel">
    {$name}
    <div class="main">
       <div class="container-fluid">
           <div class="row">
                <div class="col-md-12 col-user">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../img/korpusni-mebli-na-zamowlenia-rivne.jpg" alt="<?php echo $lang->lang_ua['carousel_img_alt'][0]; ?>" title="<?php echo $lang->lang_ua['carousel_img_title'][0]; ?>" >
                                <div class="carousel-caption">
                                    <h3><?php echo $lang->lang_ua['h3_carousel'][0];?></h3>
                                    <p><?php echo $lang->lang_ua['p_carousel'][0];?></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/mebli-dla-spalni-na-zamowlenia-rivne.jpg" alt="<?php echo $lang->lang_ua['carousel_img_alt'][1]; ?>" title="<?php echo $lang->lang_ua['carousel_img_title'][1]; ?>">
                                <div class="carousel-caption">
                                    <h3><?php echo $lang->lang_ua['h3_carousel'][1];?></h3>
                                    <p><?php echo $lang->lang_ua['p_carousel'][1];?></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/mebli-dla-dytiachoi-kimnaty-rivne.jpg" alt="<?php echo $lang->lang_ua['carousel_img_alt'][2]; ?>" title="<?php echo $lang->lang_ua['carousel_img_title'][2]; ?>">
                                <div class="carousel-caption">
                                    <h3><?php echo $lang->lang_ua['h3_carousel'][2];?></h3>
                                    <p><?php echo $lang->lang_ua['p_carousel'][2];?></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/mebli-dla-kuchni-na-zamowlenia-rivne.jpg" alt="<?php echo $lang->lang_ua['carousel_img_alt'][3]; ?>" title="<?php echo $lang->lang_ua['carousel_img_title'][3]; ?>">
                                <div class="carousel-caption">
                                    <h3><?php echo $lang->lang_ua['h3_carousel'][3];?></h3>
                                    <p><?php echo $lang->lang_ua['p_carousel'][3];?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="galeria" id="galeria" >
    <div class="caption-gallery">
        <h2><?php echo $lang->lang_ua['headers'][0]; ?></h2>
        <div class="container"><hr></div>
    </div>

    <div class="container mt40">
        <div class="row">
            <article class="custom col-xs-12 col-sm-6 col-md-4">
                <div>
                    <a href="korpusni-mebli-na-zamowlenia/szafy-kupe" title="<?php echo $lang->lang_ua['gallery_a_title'][0];?>" onclick="getContent(1)" class="zoom" >
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="../img/titles/cabinets.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][0];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][0];?>"/>
                            </div>
                            <div class="panel-footer">
                                <h4><?php echo $lang->lang_ua['gallery_h4'][0];?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            </article>
            <article class="custom col-xs-12 col-sm-6 col-md-4"2>
                <a href="korpusni-mebli-na-zamowlenia/mebli-kuchenni"  title="<?php echo $lang->lang_ua['gallery_a_title'][1];?>" onclick="getContent(2)" class="zoom">
                    <div class="panel panel-default" >
                        <div class="panel-body">
                                <img src="../img/titles/kitchen.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][1];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][1];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][1];?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="custom col-xs-12 col-sm-6 col-md-4">
                <a href="korpusni-mebli-na-zamowlenia/mebli-dla-spalni" title="<?php echo $lang->lang_ua['gallery_a_title'][2];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/bedroom.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][2];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][2];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][2];?></h4>
                        </div>
                     </div>
                </a>
            </article>

            <article class="custom col-xs-12 col-sm-6 col-md-4">
                <a href="korpusni-mebli-na-zamowlenia/mebli-w-dytiachu" title="<?php echo $lang->lang_ua['gallery_a_title'][3];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/children.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][3];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][3];?>"/>
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][3];?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="custom col-xs-12 col-sm-6 col-md-4">
                <a href="korpusni-mebli-na-zamowlenia/stinki" title="<?php echo $lang->lang_ua['gallery_a_title'][6];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/other.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][6];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][6];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][6];?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="custom col-xs-12 col-sm-6 col-md-4">
                <a href="korpusni-mebli-na-zamowlenia/ofisni-mebli" title="<?php echo $lang->lang_ua['gallery_a_title'][5];?>" class="zoom">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/office.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][5];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][5];?>"/>
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][5];?></h4>
                        </div>
                    </div>
                </a>
            </article>
      </div> <!-- end row-->
    </div> <!-- end container -->
</section>
<section class="order" id="order">
    <div class="caption-order">
        <h2><?php echo $lang->lang_ua['headers'][1]; ?></h2>
        <div class="container"><hr></div>
    </div>

    <div class="content-order">
        <div class="container">
            <div class="row">
                <div class="custom col-sm-6 col-md-4">
                    <div class="thumbnail call-us"  onmouseover="thumbnail_mouse_over('call-us')" onmouseout="thumbnail_mouse_out('call-us')">
                        <div class="caption" id="call-us">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][0]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][0]; ?></p>
                        </div>
                    </div>
                </div>
                <div class=" custom col-sm-6 col-md-4">
                    <div class="thumbnail meet" onmouseover="thumbnail_mouse_over('meet')" onmouseout="thumbnail_mouse_out('meet')">
                        <div class="caption" id="meet">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][1]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][1]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="custom col-sm-6 col-md-4">
                    <div class="thumbnail project" onmouseover="thumbnail_mouse_over('project')" onmouseout="thumbnail_mouse_out('project')"">
                        <div class="caption" id="project">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][2]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][2]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="custom col-sm-6 col-md-4">
                    <div class="thumbnail umowa" onmouseover="thumbnail_mouse_over('agreement')" onmouseout="thumbnail_mouse_out('agreement')">
                        <div class="caption" id="agreement">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][3]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][3]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="custom col-sm-6 col-md-4">
                    <div class="thumbnail do-project" onmouseover="thumbnail_mouse_over('do-project')" onmouseout="thumbnail_mouse_out('do-project')">
                        <div class="caption" id="do-project">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][4]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][4]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="custom col-sm-6 col-md-4">
                    <div class="thumbnail transport" onmouseover="thumbnail_mouse_over('delivery')" onmouseout="thumbnail_mouse_out('delivery')">
                        <div class="caption" id="delivery">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][5]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][5]; ?></p>
                        </div>
                    </div>
                </div>

            </div>  <!-- end row -->
        </div> <!-- end container -->
    </div><!-- end content-order-->
</section>

<section class="about_us" id="about_us">
    <div class="about-caption">
        <h2 itemprop="name"><?php echo $lang->lang_ua['headers'][2]; ?></h2>
        <div class="container"><hr></div>
    </div>
    <div class="about_us-content container">
        <div class="row">
            <div class="block-content col-md-12 col-sm-12 col-xs-12" itemscope itemtype="http://schema.org/Organization">
                <div class="right_side"><a href="#contact_us" title="<?php echo $lang->lang_ua['about_us_a_title'][1]?>"><img class="feedback" src="../img/feedback.png" alt="<?php echo $lang->lang_ua['about_us_img_alt'][0]; ?>" title="<?php echo $lang->lang_ua['about_us_img_title'][0]; ?>"></a> </div>
                <?php foreach ($lang->lang_ua['about_us_p'] as $value ){?>
                    <p><?php echo $value; ?></p>
                <?php }?>
            </div>
        </div>
    </div><!-- end container -->
</section>

<section class="contact_us" id="contact_us">
    <div class="caption-contact">
        <div class="container">
            <div class="row">
                <h2><?php echo $lang->lang_ua['headers'][3]; ?></h2>
                <div class="container"><hr></div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="custom col-md-offset-1 col-xs-12 col-md-4 col-xs-12">
                    <h3><?php echo $lang->lang_ua['contact_us_h3']; ?></h3>
                    <form action="../actions/send_mail.php" method="POST">
                        <input type="text" class="form-control" required="required" name="user_name" id="name" placeholder="<?php echo $lang->lang_ua['contact_us_form_info'][0]; ?>">
                        <span class="error" id="err_name"></span>
                        <input type="email" class="form-control"  required="required" name="user_email" id="email" placeholder="<?php echo $lang->lang_ua['contact_us_form_info'][1]; ?>">
                        <span class="error" id="err_email"></span>
                        <input type="text" class="form-control" required="required" name="user_number" id="number" placeholder="<?php echo $lang->lang_ua['contact_us_form_info'][2]; ?>">
                        <span class="error" id="err_number"></span>
                        <textarea name="message" id="message"  required="required" cols="30" rows="10"></textarea>
                        <span class="error" id="err_message"></span>
                        <!--<div class="g-recaptcha" data-sitekey="6Lc-kTAUAAAAANRN8Lm7Gh7o8jPFT6l4FHjT542g"></div>-->
                        <button type="submit" class="btn btn-default button"  disabled="disabled" id="send_btn"><?php echo $lang->lang_ua['contact_us_form_info'][3]; ?></button>

                    </form>

                </div>
                <div class="custom col-md-offset-1 col-md-5 col-xs-12">
                    <div class="info-contact" itemscope itemtype="http://schema.org/Organization">
                        <h2><?php echo $lang->lang_ua['contact_us_h2']?></h2>
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <h2><p><?php echo $lang->lang_ua['contact_us_p'][0]?></p></h2>
                            <p itemprop="email"><?php echo $lang->lang_ua['contact_us_p'][1]?></p>
                            <p itemprop="addressLocality"><?php echo $lang->lang_ua['contact_us_p'][2]?></p>
                        </div>
                    </div>
                    <span class="success" id="success_msg"></span>
                    <script type="text/javascript">(function(w,doc) {
                            if (!w.__utlWdgt ) {
                                w.__utlWdgt = true;
                                var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
                                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
                                var h=d[g]('body')[0];
                                h.appendChild(s);
                            }})(window,document);
                    </script>
                    <div data-mobile-view="true" style="float:right;" data-share-size="40" data-like-text-enable="false" data-background-alpha="0.0" data-pid="1717636" data-mode="follow" data-background-color="#ffffff" data-share-shape="round-rectangle" data-share-counter-size="12" data-icon-color="#ffffff" data-mobile-sn-ids="fb.vk.tw.ok.wh.vb.tm." data-text-color="#000000" data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-follow-ok="/profile/584677872137" data-share-counter-type="common" data-orientation="horizontal" data-following-enable="false" data-sn-ids="fb.vk.ok." data-preview-mobile="false" data-selection-enable="true" data-exclude-show-more="false" data-share-style="1" data-follow-vk="club93836477" data-counter-background-alpha="1.0" data-top-button="true" data-follow-fb="/groups/WestMebli/" class="uptolike-buttons" ></div>

                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div>
</section>

<!-- import footer -->
<?php  include "../php/footer.php"?>
<!-- import javaScript files -->
<?php include_once "js_links.php"?>
</body>
</html>
