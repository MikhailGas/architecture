<?php
namespace App\Factory;
use App\Factory\DBFactory;
use App\Products\DBConnection\DBConnection;
use App\Products\DBConnection\PostgreCon;
use App\Products\DBQueryBuilder\DBQueryBuilder;
use App\Products\DBQueryBuilder\PostgreCRUD;
use App\Products\DBRecord\DBRecord;
use App\Products\DBRecord\PostgreRec;

class PostgreSQLFactory extends DBFactory {
    public function DBConnection() :DBConnection{
        return new PostgreCon;
    }

    public function DBRecord() :DBRecord{
        return new PostgreRec;
    }

    public function DBQueryBuilder(): DBQueryBuilder{
        return new PostgreCRUD;
    }
}