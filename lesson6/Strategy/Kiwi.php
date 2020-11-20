<?php
namespace lesson6\Strategy;

class Kiwi implements IPay {
    public function pay(float $totalPrice, string $telNumber){
        $status['name'] = 'Киви';
        $status['status'] = 'успешно';
        return $status;
    }
}