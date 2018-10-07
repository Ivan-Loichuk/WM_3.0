<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=windows-1251" />
</head>
<body>
<p style="color: #1db30a; font-size: 20px">{$lang['send_mail_content'][0]}</p><br>
<table rules="all" style="border-color: #666;" cellpadding="10">
    <tr style= 'background: #eee;'><td><strong>{$lang['send_mail_content'][1]}</strong> </td><td>{$aSend.user_name}</td></tr>
    <tr><td><strong>{$lang['send_mail_content'][2]}</strong> </td><td>{$aSend.user_mail}</td></tr>
    <tr><td><strong>{$lang['send_mail_content'][3]}</strong> </td><td>{$aSend.user_number}</td></tr>
    <tr><td><strong>{$lang['send_mail_content'][4]}</strong> </td><td>{$aSend.user_message}</td></tr>
</table>
</body>
</html>