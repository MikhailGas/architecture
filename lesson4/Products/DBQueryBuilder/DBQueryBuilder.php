<?php
namespace App\Products\DBQueryBuilder;

abstract class DBQueryBuilder {
    abstract public function create();
    abstract public function update();
    abstract public function read();
    abstract public function delete();
}