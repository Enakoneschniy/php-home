<?php

class Cargo extends Transportation{
    public $weight=null;
    public $k =2;
    public function __construct($distance, $type, $rate, $weight)    {
        parent::__construct($distance, $type, $rate);
        $this->weight=$weight;
    }

    public function total(){
        $total= $this->getDistance() * $this->getRate()*$this->getK();
        return $total;
    }


    public function getK()    {
        return $this->k;
    }

    public function setK($k)    {
        $this->k = $k;
    }
    public function getWeight()    {
        return $this->weight;
    }

    public function setWeight($weight)    {
        $this->weight = $weight;
    }
}