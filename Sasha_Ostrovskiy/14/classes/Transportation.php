<?php

abstract class Transportation{
    public $distance=null;
    public $type="Intercity";
    public $rate=null;
    abstract public function total();

    public function __construct($distance, $type, $rate)    {
        $this->distance=$distance;
        $this->type=$type;
        $this->rate=$rate;
    }

    public function getDistance(){
        return $this->distance;
    }

    public function getType()   {
        return $this->type;
    }

    public function getRate()    {
        return $this->rate;
    }

    public function setDistance($distance)    {
        $this->distence = $distance;
    }

    public function setRate($rate)    {
        $this->rate = $rate;
    }

    public function setType($type)    {
        $this->type = $type;
    }






}