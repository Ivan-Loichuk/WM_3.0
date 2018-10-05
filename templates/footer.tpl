<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="footer__about">
                    <h4 class="footer__title">
                        {$lang.footer_h2[0]}
                    </h4>
                    <p class="footer__text">
                        {$lang.footer_p[0]}
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="footer__catalog">
                    <h4 class="footer__title">
                        {$lang.footer_h2[2]}
                    </h4>
                    <ul class="footer__works">
                        {foreach from=$lang.footer item=footer}
                            <li class="footer__work">
                                <a href="{$footer.href}" title="{$footer.title}">{$footer.a}</a>
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="footer__navigation">
                    <h4 class="footer__title">
                        Навігація
                    </h4>
                    <ul class="navigation__items">
                        <li class="navigation__item">
                            <a href="#">
                                Головна
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#">
                                Каталог
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#">
                                Як замовити
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#">
                                Про нас
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#">
                                Контакт
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="footer__contacts">
                    <h4 class="footer__title">
                        Контакти
                    </h4>
                    <ul class="footer__contact-items">
                        <li class="footer__contact-item d-flex">
                            <i class="fas fa-phone footer__contact-icon"></i>
                            <p class="footer__contact-info">+38 096 610 1928</p>
                        </li>
                        <li class="footer__contact-item d-flex">
                            <i class="fas fa-phone footer__contact-icon"></i>
                            <p class="footer__contact-info">+38 093 258 5861</p>
                        </li>
                        <li class="footer__contact-item d-flex">
                            <i class="fas fa-envelope footer__contact-icon"></i>
                            <p class="footer__contact-info">contact@west-mebli.com.ua</p>
                        </li>
                        <li class="footer__contact-item d-flex">
                            <i class="fas fa-map-marker-alt footer__contact-icon"></i>
                            <p class="footer__contact-info">м. Рівне, Україна</p>
                        </li>
                    </ul>
                    <ul class="footer__contact-links d-flex">
                        <li class="footer__link-item">
                            <a href="https://www.facebook.com/groups/WestMebli/">
                                <i class="fab fa-facebook-f footer__link-icon"></i>
                            </a>
                        </li>
                        <li class="footer__link-item">
                            <a href="https://vk.com/club93836477">
                                <i class="fab fa-vk footer__link-icon"></i>
                            </a>
                        </li>
                        <li class="footer__link-item">
                            <a href="https://ok.ru/group/54954728423433">
                                <i class="fab fa-odnoklassniki footer__link-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- end footer-row -->
    </div> <!-- end container -->
</footer>