<?php

use lesson6\Observer\PHPProgrammer;
use lesson6\Observer\User;

require '../../config.php';
require BASE_DIR.'/autoload.php';
spl_autoload_register('autoload');


$user1 = new User('Вася', 'vasya@mail.ru', 3);
$user2 = new User('Петя', 'petya@mail.ru', 5);
$phpProgrammer = new PHPProgrammer();
$phpProgrammer->addObserver($user1);
$phpProgrammer->addObserver($user2);
$phpProgrammer->newOffer('Поступило новое предложение');
//Петял нашел что искал
$phpProgrammer->removeObserver($user2);

$phpProgrammer->newOffer('Поступило ещё одно предложение');
