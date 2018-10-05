<header id="header">
    <div class="nav-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-inverse" id="<?php echo $menu;?>">     <!-- navigation menu -->
                        <div class="navbar-header" itemscope itemtype="http://schema.org/Organization">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="../" title="logotype west mebli меблі на замовлення" itemprop="url"><img src="../img/west-mebli_logotype.png" class="logotype" itemprop="logo" alt="logotype" title="logotype west mebli виготовлення меблів у Рівному"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar" itemscope itemtype="http://schema.org/SiteNavigationElement">
                            <ul class="nav navbar-nav menu">
                                <?php for($i = 0; $i<5; $i++){?>
                                    <li role="presentation" class=""><a href="<?php echo $lang->lang_ua['navigation_items_a_href'][$i] ;?>"> <?php echo $lang->lang_ua['navigation_items'][$i]; ?></a></li>
                                <?php }?>
                             </ul>
                        </div>
                    </nav>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!--end container -->
    </div>
</header>
<section>
    <div class="nav-info">
        <div class="container">
            <div class="row">
                <div class="language col-md-0 col-sm-0 col-xs-0">
                    <ul class="lang-ul-top" style="display: none;">
                        <li>
                            <form action="index.php" method="post" >
                                <input name="lang_ru" type="submit" value="Русский">
                                <input name="lang_ua" type="submit" value="Українська">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="location col-md-9 col-sm-8  col-xs-7 ">
                    <ul>
                        <li><?php echo $lang->lang_ua['header_li'][0]?></li>
                    </ul>
                </div>
                <div class="phone-number col-md-3 col-sm-4  col-xs-5 ">
                    <ul>
                        <li><?php echo $lang->lang_ua['header_li'][1]?></li>
                        <li><?php echo $lang->lang_ua['header_li'][2]?></li>
                    </ul>

                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end nav-info -->
</section>
      