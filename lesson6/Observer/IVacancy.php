<?php
namespace lesson6\Observer;

use lesson6\Observer\IObserver;

interface IVacancy {
    public function addObserver(IObserver $observer);
    public function removeObserver(IObserver $observer);
    public function notify();
    
}