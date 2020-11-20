<?php

namespace lesson6\Strategy;

class Order{
    protected $totalPrice;
    protected $telNumber;
    public function __construct(float $totalPrice, string $telNumber){
        $this->totalPrice = $totalPrice;
        $this->telNumber = $telNumber;

    }   

    public function payment(IPay $paymentSystem){
        $status = $paymentSystem->pay($this->totalPrice, $this->telNumber);
        echo "Оплата для $this->telNumber на сумму $this->totalPrice рублей через платежную систему $status[name] прошла $status[status]" . PHP_EOL;
    }
}