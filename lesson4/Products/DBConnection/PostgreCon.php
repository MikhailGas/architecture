<?php
namespace App\Products\DBConnection;

class PostgreCon extends DBConnection {
    public function connect(){
        echo "Подключаемся к Postgre" . PHP_EOL;
    }
}