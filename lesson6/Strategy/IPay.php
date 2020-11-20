<?php

namespace lesson6\Strategy;

interface IPay {
    public function pay(float $totalPrice, string $telNumber);
}
