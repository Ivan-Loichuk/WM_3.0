<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title">
                <h1 class="title__main">
                    Контакти
                </h1>
            </div>
        </div>
    </div> <!-- end title-row -->
    <div class="row">
        <div class="col-lg-7">
            <div class="contacts__block">
                <h3 class="block__title">
                    Дані контактові:
                </h3>
                <ul class="contact__items">
                    <li class="contact__item d-flex">
                        <i class="fas fa-user contact__icon"></i>
                        <p class="contact__info">Андрій Куширко</p>
                    </li>
                    <li class="contact__item d-flex">
                        <i class="fas fa-phone contact__icon"></i>
                        <p class="contact__info">+38 096 610 1928</p>
                    </li>
                    <li class="contact__item d-flex">
                        <i class="fas fa-phone contact__icon"></i>
                        <p class="contact__info">+38 093 258 5861</p>
                    </li>
                    <li class="contact__item d-flex">
                        <i class="fas fa-envelope contact__icon"></i>
                        <p class="contact__info">contact@west-mebli.com.ua</p>
                    </li>
                    <li class="contact__item d-flex">
                        <i class="fas fa-map-marker-alt contact__icon"></i>
                        <p class="contact__info">м. Рівне, Україна</p>
                    </li>
                </ul>
                <ul class="contact__links d-flex">
                    <li class="link__item">
                        <a href="https://www.facebook.com/groups/WestMebli/">
                            <i class="fab fa-facebook-f link__icon"></i>
                        </a>
                    </li>
                    <li class="link__item">
                        <a href="https://vk.com/club93836477">
                            <i class="fab fa-vk link__icon"></i>
                        </a>
                    </li>
                    <li class="link__item">
                        <a href="https://ok.ru/group/54954728423433">
                            <i class="fab fa-odnoklassniki link__icon"></i>
                        </a>
                    </li>
                </ul>
                <div class="contact__describe">
                    <h4>Переваги індивідуального замовлення</h4>
                    <p class="contact__text">
                        <strong style="color: #14b75a;">Корпусні меблі на замовлення у Рівному</strong> - це створення повного затишку та комфорту у Вашому будинку. Виготовлення меблів за індивідуальними розмірами дозволить Вам правильно розпланувати розміщення корпусних меблів і збільшити вільний простір. Ще до виготовлення меблів існує можливість перегляду проекту майбутнього дизайну інтер'єру, тому Ви завжди отримаєте те, на що сподівались. Наші клієнти мають змогу самостійно підбирати вихідні матеріали, фурнітуру та іншу комплектацію, що гарантує впевненість клієнта в якості та довговічності покупки.
                    </p>
                </div> <!-- end contact__describe -->
            </div> <!-- end contact__block -->
        </div>
        <div class="col-lg-5">
            <div class="callback">
                <h3 class="callback__title">
                    Зворотній дзвінок
                </h3>
                <p class="callback_text">Залишіть свої дані й ми зв'яжемося з Вами</p>
                <form class="callback__form" id="callback__form" >
                    <input type="text" class="callback__input" name="user_name" placeholder="Ваше ім'я">
                    <input type="text" class="callback__input" name="user_email" placeholder="Ваш електронний адрес">
                    <input type="text" class="callback__input" name="user_number" placeholder="Ваш телефон">
                    <textarea class="callback__area" name="message" placeholder="Повідомлення.."></textarea>
                    <span class="error" id="err_message"></span><br>
                    <span class="success" id="success_msg"></span>
                    <button type="submit" class="button__act" id="send_btn">Замовити дзвінок</button>
                </form>

            </div> <!-- end callback -->
        </div>
    </div> <!-- end content-row -->
</div> <!-- end container -->

<script type="text/javascript">
    $(document).ready(function() {
        /*
            send to server
        */
        $('#send_btn').click(function (e) {
            e.preventDefault();

            var email = $('#callback__form input[name=user_email]');
            var name = $('#callback__form input[name=user_name]');
            var number = $('#callback__form input[name=user_number]');
            var message = $('#callback__form textarea[name=message]');
            $.ajax({
                url:    	'index.php?p=send_message_async',
                type:		'POST',
                cache: 		false,
                data: {
                    'name':name.val(),
                    'email':email.val(),
                    'number': number.val() ,
                    'message':message.val()
                },
                dataType:	'html',
                beforeSend: function () {
                    $('#send_btn').attr ("disabled", "disabled");
                },
                success: function(data) {
                    if (data == "Повідомлення надіслано)<br>Ми з вами зв'жемося") {
                        name.val ("");
                        email.val ("");
                        number.val("");
                        message.val ("");
                        $('#success_msg').html(data);
                        $('#err_message').html("");
                        email.css("border-color", "#A5B3B1");
                        number.css("border-color", "#A5B3B1");
                        name.css("border-color", "#A5B3B1");
                        message.css("border-color", "#A5B3B1");
                        $('#send_btn').attr("disabled", "disabled");
                    } else {
                        $('#err_message').html('<br>' + data);
                        $('#send_btn').removeAttr("disabled");
                    }
                }
            });
        });
    });

</script>