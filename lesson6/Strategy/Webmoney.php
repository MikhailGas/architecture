<?php

namespace lesson6\Strategy;

class Webmoney implements IPay {
    public function pay(float $totalPrice, string $telNumber){
        $status['name'] = 'Webmoney';
        $status['status'] = 'успешно';
        return $status;
    }
}