<?php

class Review {
    private $name = '';
    private $review = '';
    private $date = '';

    public function __construct($name, $review) {
        $this->name = $name;
        $this->review = $review;
        $this->date = time();
    }

    public function __get($propName) {
        if(property_exists(self::class, $propName)){
            return $this->$propName;
        }
    }

    public function __set($propName, $propValue) {
        if(property_exists(self::class, $propName)) {
            $this->$propName = $propValue;
        }
    }
}