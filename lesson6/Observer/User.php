<?php

namespace lesson6\Observer;

use lesson6\Observer\IObserver;

class User implements IObserver{
    private $name;
    private $email;
    private $experience;

    public function __construct(string $name, string $email, int $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function toSend(string $offer)
    {
        echo "Пользователю $this->name отправлено $offer на адрес $this->email" . PHP_EOL;
    }
}