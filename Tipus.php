<?php

class Tipus {
    private string $ertek;

    function __construct() {
        $this -> ertek = "";
    }

    public function setFajdalomCsillapito() {
        $this -> ertek = "Fájdalomcsillapító";
    }

    public function setAllergiaGyogyszer() {
        $this -> ertek = "Allergia gyógyszer";
    }

    public function setGyulladasCsokkento() {
        $this -> ertek = "Gyulladáscsökkentő";
    }

    public function setKohogesCsokkento() {
        $this -> ertek = "Köhögéscsökkentő";
    }

    public function getErtek(){
        return $this -> ertek;
    }
}

?> 