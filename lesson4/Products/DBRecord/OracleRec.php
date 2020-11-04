<?php
namespace App\Products\DBRecord;
use App\Products\DBRecord\DBRecord;

class OracleRec extends DBRecord {
    public function dump(){
        echo "Выгружаем БД Oracle из дампа" . PHP_EOL;
    }
}