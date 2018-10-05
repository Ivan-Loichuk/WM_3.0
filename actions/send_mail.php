<?php
include_once '../languages/lang_ua.php';
$lang = new lang_ua();

$to = "contact@west-mebli.com.ua";
$subject = "WEST-MEBLI Нове повідомлення";
$headers = "From: west-mebli.com.ua\r\n";
$headers .= "Reply-To: contact@west-mebli.com.ua\r\n";
$headers .= "CC: vanua.loichuk@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers.= "Content-Transfer-Encoding: 8bit\n\n";

$user_name = $_POST['name'];
$user_mail = $_POST['email'];
$user_number = $_POST['number'];
$user_message = $_POST['message'];


//Server validation callback form
$error = "";
if(trim($user_name) == "" && trim($user_message) == "" && trim($user_number) == "" && trim($user_mail) == ""){
    $error = $lang->lang_ua['send_mail_communicate'][0];
}
elseif(trim($user_name) == ""){
    $error = $lang->lang_ua['send_mail_communicate'][1];
}
elseif (!((strpos($user_mail, ".") > 0) &&(strpos($user_mail, "@") > 0 ))){
    $error = $lang->lang_ua['send_mail_communicate'][2];
}
elseif (trim($user_number) == ""){
    $error = $lang->lang_ua['send_mail_communicate'][3];
}
elseif (!preg_match('/[0-9]{9,13}/', $user_number)){
    $error = $lang->lang_ua['send_mail_communicate'][4];
}
elseif (trim($user_message) == ""){
    $error = $lang->lang_ua['send_mail_communicate'][5];
}

if ($error != ""){
    echo $error;
    exit;
}

$message .= '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; 
    charset=windows-1251" />
</head>
<body>
<p style="color: #1db30a; font-size: 20px">' . $lang->lang_ua['send_mail_content'][0] . '</p><br>
<table rules="all" style="border-color: #666;" cellpadding="10">
    <tr style= \'background: #eee;\'><td><strong>' . $lang->lang_ua['send_mail_content'][1] . '</strong> </td><td>'.$user_name.'</td></tr>
    <tr><td><strong>' . $lang->lang_ua['send_mail_content'][2] . '</strong> </td><td>'. $user_mail .'</td></tr>
    <tr><td><strong>' . $lang->lang_ua['send_mail_content'][3] . '</strong> </td><td>'.$user_number.'</td></tr>
    <tr><td><strong>' . $lang->lang_ua['send_mail_content'][4] . '</strong> </td><td>'.$user_message.'</td></tr>
</table>
</body>
</html>';

    if(mail($to, $subject , $message, $headers)){
        echo $lang->lang_ua['send_mail_communicate'][6];
    }
    else{
        echo $lang->lang_ua['send_mail_communicate'][7];
    }


