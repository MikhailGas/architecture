<?php
namespace App\Factory;

use App\Products\DBConnection\DBConnection;
use App\Products\DBQueryBuilder\DBQueryBuilder;
use App\Products\DBRecord\DBRecord;



abstract class DBFactory {
    abstract public function DBConnection() :DBConnection;
    abstract public function DBRecord() :DBRecord;
    abstract public function DBQueryBuilder() :DBQueryBuilder;
}