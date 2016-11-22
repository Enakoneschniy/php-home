<?php

class Passenger extends Transportation{
    public $passeng=null;
    public $p =1.5;
    public function __construct($distance, $type, $rate, $passeng)    {
        parent::__construct($distance, $type, $rate);
        $this->passeng=$passeng;
    }

    public function total()
    {
        $total = $this->getDistance() * $this->getRate() * $this->getP();
        return $total;
    }
    public function getP()    {
        return $this->p;
    }

    public function setP($p)    {
        $this->p = $p;
    }
    public function getPasseng()    {
        return $this->passeng;
    }

    public function setWeight($passeng)    {
        $this->passeng = $passeng;
    }
}