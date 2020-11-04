<?php
namespace App\Factory;

use App\Factory\DBFactory;
use App\Products\DBConnection\DBConnection;
use App\Products\DBConnection\MySQLCon;
use App\Products\DBQueryBuilder\DBQueryBuilder;
use App\Products\DBQueryBuilder\MySQLCRUD;
use App\Products\DBRecord\DBRecord;
use App\Products\DBRecord\MySQLRec;

class MySQLFactory extends DBFactory {
    public function DBConnection() :DBConnection{
        return new MySQLCon;
    }

    public function DBRecord() :DBRecord{
        return new MySQLRec;
    }

    public function DBQueryBuilder(): DBQueryBuilder{
        return new MySQLCRUD;
    }

}