
<?php
require "../configure/db.php";
//  veryfication and login user(admin)

if( isset($_REQUEST['login'])){
    if(isset($_REQUEST['password'])) {
        $user = R::findOne('users', 'login = ?', array($_REQUEST['login']));
        if ($user) {
            if (md5($_REQUEST['password']) == $user->password) {
                session_start();
                echo 1;
                $_SESSION['errors'] = null;
                $_SESSION['logged_user'] = $user;
                exit;
            } else { echo "Неправильний пароль"; exit; }
        } else { echo 'Користувача з таким логіном не знайдено'; exit;}
    } else echo "Введіть пароль"; exit;
}else echo "Введіть логін"; exit;

