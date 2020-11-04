<?php
namespace App\Products\DBRecord;
use App\Products\DBRecord\DBRecord;

class MySQLRec extends DBRecord {
    public function dump(){
        echo "Выгружаем БД MySQL из дампа" . PHP_EOL;
    }
}