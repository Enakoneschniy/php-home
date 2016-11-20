<?php

abstract class udilishcha{

    protected $dlinna = null;
    protected $casting = null;
    protected $kolSektsiy = null;
    public $kolca = null;
    public $material = null;
    public $name = null;


    abstract public function info();
    //abstract public function getKolKvivertip();

    public function __construct($dlinna, $casting, $kolSektsiy){
        $this->dlinna = $dlinna;
        $this->casting = $casting;
        $this->kolSektsiy = $kolSektsiy;
    }

    public function getCasting()
    {
        return $this->casting;
    }

    public function getDlinna()
    {
        return $this->dlinna;
    }

    public function getKolSektsiy()
    {
        return $this->kolSektsiy;
    }

    public function setCasting($casting)
    {
        $this->casting = $casting;
    }

    public function setDlinna($dlinna)
    {
        $this->dlinna = $dlinna;
    }

    public function setKolSektsiy($kolSektsiy)
    {
        $this->kolSektsiy = $kolSektsiy;
    }

}