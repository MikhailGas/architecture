<?php

use lesson6\Strategy\Kiwi;
use lesson6\Strategy\Order;
use lesson6\Strategy\Webmoney;
use lesson6\Strategy\Yandex;

require '../../config.php';
require BASE_DIR.'/autoload.php';
spl_autoload_register('autoload');

$order = new Order(1000, '89058505619');
$order->payment(new Kiwi());
$order->payment(new Yandex());
$order->payment(new Webmoney());

