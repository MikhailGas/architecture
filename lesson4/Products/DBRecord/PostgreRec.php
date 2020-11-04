<?php
namespace App\Products\DBRecord;
use App\Products\DBRecord\DBRecord;

class PostgreRec extends DBRecord {
    public function dump(){
        echo "Выгружаем БД Postgre из дампа" . PHP_EOL;
    }
}