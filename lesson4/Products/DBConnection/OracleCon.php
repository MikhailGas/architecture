<?php
namespace App\Products\DBConnection;

class OracleCon extends DBConnection {
    public function connect(){
        echo "Подключаемся к Oracle" . PHP_EOL;
    }
}