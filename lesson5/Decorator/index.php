<?php

use lesson5\Decorator\EmailSend;
use lesson5\Decorator\SMSSend;
use lesson5\Decorator\VKSend;

require '../../config.php';
require BASE_DIR.'/autoload.php';
spl_autoload_register('autoload');

function sender($user){
    echo 'Пользователю ' . $user . PHP_EOL;
    $send = new SMSSend(new VKSend(new EmailSend()));
    $send->send();
}

sender('Вася');