<?php
namespace App\Factory;

use App\Products\DBConnection\DBConnection;
use App\Products\DBQueryBuilder\DBQueryBuilder;
use App\Products\DBRecord\DBRecord;



abstract class DBFactory {
    private $DBConnection;
    private $DBRecord;
    private $DBQueryBuilder;

    public function __construct(){
        $this->DBConnection = $this->DBConnection();
        $this->DBRecord = $this->DBRecord();
        $this->DBQueryBuilder = $this->DBQueryBuilder();
    }
    public function connect(){
        $this->DBConnection->connect();
    }

    public function dump(){
        $this->DBRecord->dump();
    }   

    public function CRUD(){
        return $this->DBQueryBuilder;
    }

    abstract public function DBConnection() :DBConnection;
    abstract public function DBRecord() :DBRecord;
    abstract public function DBQueryBuilder() :DBQueryBuilder;
}