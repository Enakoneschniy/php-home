<?php

class spinning extends udilishcha{

    public $stroyUdilishcha = null;
    public $kolca = 'SIC';
    public $material = 'Графит';
    public $kolKviver = 'шт.';
    public $name  = 'Спинниг';

    public function __construct($dlinna, $casting, $kolSektsiy, $stroy){

        parent::__construct($dlinna, $casting, $kolSektsiy);
        $this->stroyUdilishcha = $stroy;

    }

    public function getStroyUdilishcha()
    {
        return $this->stroyUdilishcha;
    }

    public function setStroyUdilishcha($stroyUdilishcha)
    {
        $this->stroyUdilishcha = $stroyUdilishcha;
    }
    public function info(){

        return "Это удилище типа: " .$this->name.
        ";<br> Длинна: ".$this->dlinna.
        ";<br> Кастинг удилища, грамм: ".$this->casting.
        ";<br> Строй удилища: ".$this->stroyUdilishcha.
        ";<br> Количество секций: ".$this->kolSektsiy.
        ";<br> Тип колец: ".$this->kolca.
        ";<br> Материал удилища: ".$this->material;

    }

}