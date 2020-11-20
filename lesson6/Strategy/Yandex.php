<?php
namespace lesson6\Strategy;

class Yandex implements IPay {
    public function pay(float $totalPrice, string $telNumber){
        $status['name'] = 'Яндекс деньги';
        $status['status'] = 'успешно';
        return $status;
    }
}