<?php
namespace App\Products\DBQueryBuilder;
use App\Products\DBQueryBuilder\DBQueryBuilder;

class OracleCRUD extends DBQueryBuilder {
    public function create(){
        echo "Создаем запись в БД Oracle" . PHP_EOL;
    }
    public function read(){
        echo "Читаем запись из БД Oracle" . PHP_EOL;
    }
    public function update(){
        echo "Обновляем запись в БД Oracle" . PHP_EOL;
    }
    public function delete(){
        echo "Удаляем запись из БД Oracle" . PHP_EOL;
    }
}