<?php

use lesson5\Adapter\adapters\CircleAreaAdapter;
use lesson5\Adapter\adapters\SquareAreaAdapter;
use lesson5\Adapter\external_library\CircleAreaLib;
use lesson5\Adapter\external_library\SquareAreaLib;

require '../../config.php';
require BASE_DIR.'/autoload.php';
spl_autoload_register('autoload');

echo ((new SquareAreaAdapter(new SquareAreaLib()))->squareArea(2)) . PHP_EOL; //Сторона квадрата
echo (new CircleAreaAdapter(new CircleAreaLib()))->circleArea(8); //Длина окружности