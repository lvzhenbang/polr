<?php
$mail_arr = [
    'driver' => env('MAIL_DRIVER'),
    'host' => env('MAIL_HOST'),
    'port' => env('MAIL_PORT'),
    'from' => ['address' => env('MAIL_FROM_ADDRESS'), 'name' => env('MAIL_FROM_NAME')],
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,

];

if (env('MAIL_PORT') == 465) {
    if (!empty(env('MAIL_ENCRYPTION'))) {
        $mail_arr["encryption"] = env('MAIL_ENCRYPTION');
    } else {
        $mail_arr["encryption"] = "ssl";
    }
}

return $mail_arr;
