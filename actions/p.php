<?php
$aAction['p'] = ($_GET['p'] ?? "");

if($aAction['p'] == 'home'){
    $smarty->assign('config', $config);

    $content = $smarty->fetch('templates/main_page.tpl');
}elseif ($aAction['p'] == 'gallery'){

    $title = 'Виготовлення меблів для кухні на замовлення Рівне - West mebli';
    $keywords = 'кухні на замовлення рівне, кухні купить у Рівному, корпусні кухні рівне, корпусні кухні на замовлення у Рівному, виготовлення кухні на замовлення Рівне, виготовлення кухні у Рівному, замовити кухню у Рівному, кухні рівне';
    $description = 'Екзклюзивні кухні за власним дизайном. Виготовлення корпусних кухонь на замовлення в місті Рівному - Вест меблі';

}elseif ($aAction['p'] == 'kitchen'){

    $aImages = $oImage->getImages($_GET['p']);

    $smarty->assign('images', $aImages);
    $smarty->assign('describe', $GLOBALS['lang']['kitchen_describe']);
    $smarty->assign('config', $config);


    $title = 'Виготовлення меблів для кухні на замовлення Рівне - West mebli';
    $keywords = 'кухні на замовлення рівне, кухні купить у Рівному, корпусні кухні рівне, корпусні кухні на замовлення у Рівному, виготовлення кухні на замовлення Рівне, виготовлення кухні у Рівному, замовити кухню у Рівному, кухні рівне';
    $description = 'Екзклюзивні кухні за власним дизайном. Виготовлення корпусних кухонь на замовлення в місті Рівному - Вест меблі';


    $content = $smarty->fetch('templates/default_gallery.tpl');
}
elseif ($aAction['p'] == 'children'){

    $aImages = $oImage->getImages($_GET['p']);
    $smarty->assign('images', $aImages);
    $smarty->assign('describe', $GLOBALS['lang']['children_describe']);
    $smarty->assign('config', $config);

    $title = 'Виготовлення меблів в дитячу кімнату у Рівному - West-mebli';
    $keywords = 'меблі в дитячу кімнату, меблі в дитячу кімнату на замовлення рівне, меблі дитячі на замовлення рівне, меблі дитячі рівне, купить меблі в дитячу рівне, меблі для дитячої кімнати рівне,
                 замовити меблі в дитячу рівне, дитячі кімнати рівне, меблі в дитячу купить у Рівному, дитячі ліжка рівне, ліжко в дитячу кімнату рівне, стіл дитячий замовити рівне, корпусні меблі в дитячу рівне';
    $description = 'У нас можна замовити меблі в дитячу кімнату за власним дизайном для вашої дитини у Рівному за доступними цінами. Виготовлення меблів в дитячу на замовлення - Вест меблі.';

    $content = $smarty->fetch('templates/default_gallery.tpl');
}
elseif ($aAction['p'] == 'cabinets'){

    $aImages = $oImage->getImages($_GET['p']);
    $smarty->assign('images', $aImages);
    $smarty->assign('describe', $GLOBALS['lang']['cabinets_describe']);
    $smarty->assign('config', $config);

    $title = 'Виготовлення шафи купе на замовлення у Рівному - West mebli';
    $keywords = 'шафи купе на замовлення Рівне, шафи купе купить у Рівному, шафи купе виготовлення рівне, корпусні шафи купе у Рівному,
                 виготовлення корпусних шаф купе, замовити шафу купе у Рівному, шафа купе під замовлення Рівне, шафи купе Рівне';
    $description = 'Великий вибір шаф купе на замовлення у Рівному. Можна виготовити шафу купе за власним дизайном. Галерея шаф купе - Вест меблі';

    $content = $smarty->fetch('templates/default_gallery.tpl');
}
elseif ($aAction['p'] == 'office'){

    $aImages = $oImage->getImages($_GET['p']);
    $smarty->assign('images', $aImages);
    $smarty->assign('describe', $GLOBALS['lang']['office_describe']);
    $smarty->assign('config', $config);

    $title = 'Меблі для офісу на замовлення у Рівному - West mebli';
    $keywords = 'офісні меблі рівне, офісні меблі на замовлення Рівне, корпусні меблі для офісу рівне, купить меблі для офісу рівне,
                 замовити меблі для офісу рівне, виготовлення меблів для офісу у Рівному';
    $description = 'Офісні меблі за індивідуальним замовленням клієнта має багато переваг. Виготовлення меблів у місті Рівному - Вест меблі';
    $content = $smarty->fetch('templates/default_gallery.tpl');
}
elseif ($aAction['p'] == 'others'){

    $aImages = $oImage->getImages($_GET['p']);
    $smarty->assign('images', $aImages);
    $smarty->assign('describe', $GLOBALS['lang']['others_describe']);
    $smarty->assign('config', $config);

    $title = 'Комоди, серванти, столи, барні стійки на замовлення у Рівному';
    $keywords = 'комоди на замовлення рівне, виготовлення комодів у рівному, барна стійка на замовлення рівне, комод купить у рівному,
                 виготовлення барної стійки рівне, стіл комп\'ютерний на замовленя рівне, стіл комп\'ютерний Рівне, серванти на замовлення рівне, виготовлення сервантів рівне, купить сервант у рівному,
                 вішалки замовити у рівному, вішалки на замовлення рівне, вітрини на замовлення рівне';
    $description = 'Ми виготовляємо меблі різного типу – від полички до масштабних об’єктів, будь-які нестандартні корпусні меблі:
                    комп\'ютерні столи, барні стійки, комоди, серванти, вітрини на замовлення у Рівному.';
    $content = $smarty->fetch('templates/default_gallery.tpl');
}
elseif ($aAction['p'] == 'bedroom'){

    $aImages = $oImage->getImages($_GET['p']);
    $smarty->assign('images', $aImages);
    $smarty->assign('describe', $GLOBALS['lang']['bedroom_describe']);
    $smarty->assign('config', $config);

    $title = 'Меблі для спальні на замовлення у Рівному - West-mebli';
    $keywords = 'спальні у Рівному, спальні на замовлення Рівне, меблі для спальні, меблі для спальні на замовлення, купить меблі для спальні, спальні у Рівному, спальні купить у Рівному, спальні виготовлення рівне, дерев\'яні спальні рівне, спальні гарнітури рівне, спальні рівне ціни';
    $description = 'У нас можна замовити будь-які меблі для спальні - двоспальне ліжко, комод, туалетний стіл і багато іншого можна купити для спальні у Рівному';
    $content = $smarty->fetch('templates/default_gallery.tpl');
}elseif ($aAction['p'] == 'send_message_async'){
    $aSend = $oCommon->sendContactMessage();
    $smarty->assign('lang', $lang);
    $smarty->assign('aSend', $aSend);
    $message = $smarty->fetch( 'templates/partial/mail_content.tpl' );
   if(empty($aSend['error'])){
       if(mail($aSend['to'],$aSend['subject'] , $message, $aSend['headers'])){
           echo $GLOBALS['lang']['send_mail_communicate'][6];
       }
       else{
           echo $GLOBALS['lang']['send_mail_communicate'][7];
       }
   }else{
       echo $aSend['error'];
   }
   exit;
}
else{

    $smarty->assign('config', $config);

    $content = $smarty->fetch('templates/main_page.tpl');
}
