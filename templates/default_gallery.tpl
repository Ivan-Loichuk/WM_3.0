<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="category-wrap">
                    <h3>Категорії</h3>
                    <ul>
                        <li><a href="mebli-kuchenni" {if $smarty.get.p == 'kitchen'}class="active"{/if}>Кухні</a></li>
                        <li><a href="mebli-w-dytiachu" {if $smarty.get.p == 'children'}class="active"{/if}>Дитячі кімнати</a></li>
                        <li><a href="mebli-dla-spalni" {if $smarty.get.p == 'bedroom'}class="active"{/if}>Спальні</a></li>
                        <li><a href="ofisni-mebli" {if $smarty.get.p == 'office'}class="active"{/if}>Меблі для офісу</a></li>
                        <li><a href="szafy-kupe" {if $smarty.get.p == 'cabinets'}class="active"{/if}>Шафи-купе</a></li>
                        {*<li><a href="matrasy">Матраци</a></li>*}
                        <li><a href="stinki" {if $smarty.get.p == 'others'}class="active"{/if}>Різне</a></li>
                    </ul>
                </div>
                <div class="links-block">
                    <ul class="links d-flex">
                        <li class="link">
                            <a href="https://www.facebook.com/groups/WestMebli/" class="iconl">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="link">
                            <a href="https://vk.com/club93836477" class="iconl">
                                <i class="fab fa-vk"></i>
                            </a>
                        </li>
                        <li class="link">
                            <a href="https://ok.ru/group/54954728423433" class="iconl">
                                <i class="fab fa-odnoklassniki-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="container gallery-container">
                    <div class="gallery__describe">
                        <h3>Меблі для спальні на замовлення у місті Рівне</h3>
                        <p class="describe__text">
                            Спальні на замовлення - ідеальний спосіб роздобути стильне, затишне і практичне гніздечко для себе і своєї другої половинки. Вибір меблів для спальні – це серйозне завдання, яке стоїть перед власником квартири.
                        </p>
                    </div>
                    <div class="tz-gallery">
                        {foreach from=$images item=row}
                            <div class="row mb-3">
                                {foreach from=$row item=image}
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a class="lightbox" href="{$config.templates_dir}/{$image.location}">
                                                <img src="{$config.templates_dir}/{$image.location_mini}" alt="{$image.alt}" name="{$image.name_photo}" class="card-img-top">
                                            </a>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        {/foreach}
                    </div>
                    <div class="gallery__describe">
                        <h3>Меблі для спальні купити у Рівному</h3>
                        <p class="describe__text">
                            Від якості меблів для спалень залежить якість Вашого сну та відпочинку. Всі предмети інтер'єру спальної кімнати мають бути практичними і зручними, при цьому мати індивідуальний дизайн.<br>
                            Крім того, ми пропонуємо як спальні гарнітури в комплекті, так і модульні системи, перевагою яких є можливість підібрати окремі елементи для Вашої спальні. Спальні - інтимний і в той же час найбільш використовуваний елемент інтер'єру Вашого будинку. Про того наскільки зручна і затишна спальня залежить настрій і навіть Ваше самопочуття. Ми допоможемо вибрати вам спальню, яка буде найкраще пасувати вашому смаку з урахуванням матеріальних можливостей і габаритів Вашої кімнати.
                        </p>
                        <h3>Які меблі вибрати для спальні?</h3>
                        <p class="describe__text">У сучасному розумінні спальня - це не тільки комод і зручне ліжко. Тут кожен з нас розслабляється, відновлює сили - проводить третину свого життя. Ми пропонуємо кожному клієнту підібрати найкращі меблі для спальні, які відмінно підійдуть для інтер'єру. Як правило, меблі підбирають, виходячи з побажання замовників. Вибір меблів для спальні полягає в наступних факторах:<br>
                            - міцності;<br>
                            - функціональністі;<br>
                            - екологічність матеріалу;<br>
                            - стійкості конструкцій до навантажень.<br>
                            Купуючи меблі в спальню у нас Ви маєте можливісь підібрати власний дизайн, замовити ексклюзивні елементи для вашої спальні, підібрати колір і матеріал.</p>
                    </div>
                </div> <!-- end gallery-container -->
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section><!-- end gallery -->