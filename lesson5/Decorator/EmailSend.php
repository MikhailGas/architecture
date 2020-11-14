<?php
namespace lesson5\Decorator;

class EmailSend implements ISend {
    public function send(){                 
        echo 'Отправляем по email'.PHP_EOL;
    }
}