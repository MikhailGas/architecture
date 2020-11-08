<?php
namespace App\Factory;

use App\Products\DBConnection\DBConnection;
use App\Products\DBConnection\OracleCon;
use App\Products\DBQueryBuilder\DBQueryBuilder;
use App\Products\DBQueryBuilder\OracleCRUD;
use App\Products\DBRecord\DBRecord;
use App\Products\DBRecord\OracleRec;

class OracleSQLFactory extends DBFactory {
    public function DBConnection() :DBConnection{
        return new OracleCon;
    }

    public function DBRecord() :DBRecord{
        return new OracleRec;
    }

    public function DBQueryBuilder(): DBQueryBuilder{
        return new OracleCRUD;
    }
}