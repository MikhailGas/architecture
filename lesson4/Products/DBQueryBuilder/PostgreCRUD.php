<?php
namespace App\Products\DBQueryBuilder;
use App\Products\DBQueryBuilder\DBQueryBuilder;

class PostgreCRUD extends DBQueryBuilder {
    public function create(){
        echo "Создаем запись в БД Postgre" . PHP_EOL;
    }
    public function read(){
        echo "Читаем запись из БД Postgre" . PHP_EOL;
    }
    public function update(){
        echo "Обновляем запись в БД Postgre" . PHP_EOL;
    }
    public function delete(){
        echo "Удаляем запись из БД Postgre" . PHP_EOL;
    }
}