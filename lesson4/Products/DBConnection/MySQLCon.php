<?php
namespace App\Products\DBConnection;

class MySQLCon extends DBConnection {
    public function connect(){
        echo "Подключаемся к MySQL" . PHP_EOL;
    }
}