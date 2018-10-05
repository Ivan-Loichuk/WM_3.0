<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="left-footer">
                    <h2>{$lang.footer_h2[0]}</h2>
                    <p>{$lang.footer_p[0]}</p>

                    <div>
                        <a title="{$lang.footer_a_title[0]}"><i class="fa fa-vk"></i></a>
                        <a href="https://ok.ru/group/54954728423433" title="{$lang.footer_a_title[1]}"><i class="fa fa-odnoklassniki"></i></a>
                        <a href="https://www.facebook.com/groups/WestMebli" title="{$lang.footer_a_title'][2]}"><i class="fa fa-facebook-f"></i> </a>
                    </div>
                    <div class="fb-like" data-href="http://www.west-mebli.com.ua" data-layout="button" data-action="recommend" data-size="small" data-show-faces="true" data-share="true"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="center-footer">
                    <h2>{$lang.footer_h2[1]}</h2>
                    {foreach from=$lang.footer_p item=p}
                        <p>{$p}</p>
                    {/foreach}
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="right-footer">
                    <h2>{$lang.footer_h2[2]}</h2>
                    <ul>
                        {foreach from=$lang.footer item=footer}
                            <li><a href="{$footer.href}" title="{$footer.title}">{$footer.a}</a></li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row bottom">
            <div class="col-md-2 col-sm-4 col-xs-12">
                <p>website@2017</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="lang-ul" style="display: none;">
                    <li class="list-gr">Language: </li>
                    <li>
                        <form class="language" action="index.php" method="post" >
                            <input name="lang_ru" type="submit" value="русский">
                            <input name="lang_ua" type="submit" value="українська">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-2 col-xs-12">
                <div class="admin-btn">
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Admin</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                        <div class="col-md-12 login_form">
                                            <h4>Вхід(admin)</h4>
                                            <form class="form" action="actions/logout.php" method="post" id="login-nav">
                                                    <input type="text" class="form-control" name="log_in" id="log_in" placeholder="Логин" >
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" >
                                                    <input type="button" class="btn btn-primary btn-block" id="login" name="do_login" value="Увійти">
                                                    <input type="submit" class="logout-btn" id="logout" value="Bийти">
                                            </form>
                                            <div id="log"></div>
                                        </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
              </div>
            </div>
        </div>
    </div>
</footer>
