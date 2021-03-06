<?php
/**
 * Created by PhpStorm.
 * User: Venus
 * Date: 07.10.2018
 * Time: 14:47
 */
include_once "configure/db.php";

class Common
{

    function sendContactMessage(){

        $aSend['to'] = "contact@west-mebli.com.ua";
        $aSend['subject'] = "WEST-MEBLI Нове повідомлення";
        $aSend['headers'] = "From: west-mebli.com.ua\r\n";
        $aSend['headers'] .= "Reply-To: contact@west-mebli.com.ua\r\n";
        $aSend['headers'] .= "CC: vanua.loichuk@gmail.com\r\n";
        $aSend['headers'] .= "MIME-Version: 1.0\r\n";
        $aSend['headers'] .= "Content-Type: text/html; charset=utf-8\r\n";
        $aSend['headers'].= "Content-Transfer-Encoding: 8bit\n\n";

        $aSend['user_name'] = $_POST['name'];
        $aSend['user_mail'] = $_POST['email'];
        $aSend['user_number'] = $_POST['number'];
        $aSend['user_message'] = $_POST['message'];


//Server validation callback form
        $error = "";
        if(trim($aSend['user_name']) == "" && trim( $aSend['user_message']) == "" && trim( $aSend['user_number']) == "" && trim($aSend['user_mail']) == ""){
            $error = $GLOBALS['lang']['send_mail_communicate'][0];
        }
        elseif(trim($aSend['user_name']) == ""){
            $error = $GLOBALS['lang']['send_mail_communicate'][1];
        }
        elseif (!((strpos($aSend['user_mail'], ".") > 0) &&(strpos($aSend['user_mail'], "@") > 0 ))){
            $error = $GLOBALS['lang']['send_mail_communicate'][2];
        }
        elseif (trim( $aSend['user_number']) == ""){
            $error = $GLOBALS['lang']['send_mail_communicate'][3];
        }
        elseif (!preg_match('/[0-9]{9,16}/',  $aSend['user_number'])){
            $error = $GLOBALS['lang']['send_mail_communicate'][4];
        }
        elseif (trim( $aSend['user_message']) == ""){
            $error = $GLOBALS['lang']['send_mail_communicate'][5];
        }

        $aSend['error'] = $error;

        return $aSend;
    }

    function login(){
        if( isset($_POST['login']) && !empty($_POST['login'])){
            if(isset($_POST['password']) && !empty($_POST['password'])) {
                $user = R::findOne('users', 'login = ?', array($_POST['login']));
                if ($user) {
                    if (md5($_REQUEST['password']) == $user->password) {
                        $_SESSION['logged_user'] = $user->login;
                        return 1;
                    } else { $_COOKIE['error_message'] = "Incorrect password"; }
                } else { $_COOKIE['error_message'] = "No users found";}
            } else $_COOKIE['error_message'] = "Please enter password";
        }else $_COOKIE['error_message'] = "Please enter login";

        unset($_SESSION['logged_user']);
        return 0;
    }
    function logout(){
        unset($_SESSION['logged_user']);
    }
}