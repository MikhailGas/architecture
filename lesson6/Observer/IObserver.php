<?php
namespace lesson6\Observer;

interface IObserver {
    public function toSend(string $offer);
}