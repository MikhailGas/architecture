<?php
require 'autoload.php';
spl_autoload_register('autoload');

use App\Factory\DBFactory;
use App\Factory\MySQLFactory;
use App\Factory\OracleSQLFactory;
use App\Factory\PostgreSQLFactory;

function test(DBFactory $db){
    return $db;
}

$mysql = test(new MySQLFactory);

$mysql->connect();
$mysql->dump();
$mysql->CRUD()->read();