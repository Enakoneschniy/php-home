<?php

class fidernie extends udilishcha {

    public $kolKvivertip = null;
    public $kolca = 'SIC';
    public $material = 'Графит';
    //public $kolKviver = 'шт.';
    public $name  = 'Фидер';

    public function __construct($dlinna, $casting, $kolSektsiy, $kvivertip){

    parent::__construct($dlinna, $casting, $kolSektsiy);
    $this->kolKvivertip = $kvivertip;

    }

    public function getKolKvivertip()
    {
        return $this->kolKvivertip;
    }
    /*public function getKolKvivertip()
    {
        return $this->kolKvivertip." ".$this->kolKviver;
    }*/

    public function setKolKvivertip($kolKvivertip)
    {
        $this->kolKvivertip = $kolKvivertip;
    }

    public function info(){

        return "Это удилище типа: " .$this->name.
        ";<br> Длинна: ".$this->dlinna.
        ";<br> Кастинг удилища, грамм: ".$this->casting.
        ";<br> Количество секций: ".$this->kolSektsiy.
        ";<br> Тип колец: ".$this->kolca.
        ";<br> Материал удилища: ".$this->material.
        //";<br> Количество квивертипов в комплекте: ".$this->getKolKvivertip(); вот тут хотел добавить слово "шт."
        // после числа,чтобы красивее было, но сначала выдавало ошибку, после того,
        // когда я добавил этот метод в родительском классе, стало норм. Но когда я делал второй дочерний класс,
        // у меня была ошибка, типа я должен этот методи и там обьявить, но он мне там не нужен.
        // Подскажи, как сделать красиво?
        ";<br> Количество квивертипов в комплекте, шт. : ".$this->kolKvivertip;
    }

}