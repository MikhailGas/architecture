<?php
namespace lesson5\Decorator;

class SMSSend implements ISend{
    protected $sendMethod;

    public function __construct(ISend $sendMethod) {
        $this->sendMethod = $sendMethod;
    }   

    public function send(){
        echo 'Отправляем SMS' . PHP_EOL;
        $this->sendMethod->send();
    }
    
}