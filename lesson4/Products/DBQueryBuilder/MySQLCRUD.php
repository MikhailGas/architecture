<?php
namespace App\Products\DBQueryBuilder;
use App\Products\DBQueryBuilder\DBQueryBuilder;

class MySQLCRUD extends DBQueryBuilder {
    public function create(){
        echo "Создаем запись в БД MySQL" . PHP_EOL;
    }
    public function read(){
        echo "Читаем запись из БД MySQL" . PHP_EOL;
    }
    public function update(){
        echo "Обновляем запись в БД MySQL" . PHP_EOL;
    }
    public function delete(){
        echo "Удаляем запись из БД MySQL" . PHP_EOL;
    }
}