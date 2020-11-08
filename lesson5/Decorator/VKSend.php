<?php
namespace lesson5\Decorator;

class VKSend implements ISend{
    protected $sendMethod;

    public function __construct(ISend $sendMethod) {
        $this->sendMethod = $sendMethod;
    }   

    public function send(){
        echo 'Отправляем в VK' . PHP_EOL;
        $this->sendMethod->send();
    }
    
}