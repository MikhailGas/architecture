<?php
namespace lesson6\Observer;

use lesson6\Observer\IObserver;
use lesson6\Observer\IVacancy;

class PHPProgrammer implements IVacancy {
    private $observers;
    private $offer;

    public function addObserver(IObserver $observer){
        $this->observers[] = $observer;
    }

    public function removeObserver(IObserver $observer){   
                 
        foreach ($this->observers as $key=>$obsrv) {
            

            if ($obsrv === $observer) {
                unset($this->observers[$key]);
                
        	}
        }

    }

    public function notify(){
        foreach($this->observers as $observer){
            $observer->toSend($this->offer);
        }
    }

    public function newOffer(string $offer){
        $this->offer = $offer;
        $this->notify();
    }
}