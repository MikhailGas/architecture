<?php
require 'autoload.php';
spl_autoload_register('autoload');

use App\Factory\MySQLFactory;
use App\Factory\OracleSQLFactory;
use App\Factory\PostgreSQLFactory;

$mysql = (new MySQLFactory())->DBConnection();
$mysqlRec = (new MySQLFactory())->DBRecord();
$mysqlCRUD = (new MySQLFactory())->DBQueryBuilder();
$mysql->connect();
$mysqlCRUD->create();

$mysql = (new OracleSQLFactory())->DBConnection();
$mysqlRec = (new OracleSQLFactory())->DBRecord();
$mysqlCRUD = (new OracleSQLFactory())->DBQueryBuilder();
$mysql->connect();
$mysqlCRUD->read();

$mysql = (new PostgreSQLFactory())->DBConnection();
$mysqlRec = (new PostgreSQLFactory())->DBRecord();
$mysqlCRUD = (new PostgreSQLFactory())->DBQueryBuilder();
$mysql->connect();
$mysqlCRUD->update();