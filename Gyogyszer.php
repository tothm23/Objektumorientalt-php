<?php

require_once("Tipus.php");

class Gyogyszer {
    private string $nev;
    private string $lejarat;
    private string $tipus;
    private string $gyarto;
    private int $gyartasiSzam;
    private int $mennyiseg;
    private static bool $megbontott;

    private string $hatoanyag;
    private int $ar;
    private string $forgalmazo;

    function __construct(string $nev = "", string $lejarat = "", string $tipus = "", string $gyarto = "", int $gyartasiSzam = 0, int $mennyiseg = 0, bool $megbontott = false, string $hatoanyag = "", int $ar = 0, string $forgalmazo = "") {
        $this -> nev = $nev;
        $this -> lejarat = $lejarat;
        $this -> tipus = $tipus;
        $this -> gyarto = $gyarto;
        $this -> gyartasiSzam = $gyartasiSzam;
        $this -> mennyiseg = $mennyiseg;
        $this -> hatoanyag = $hatoanyag;
        $this -> ar = $ar;
        $this -> forgalmazo = $forgalmazo;
    }

    public function statisztika(){
        print "Név: " . $this -> nev . "<br>" .
        "Lejárat: " . $this -> lejarat . "<br>" .
        "Tipus: " . $this -> tipus . "<br>" .
        "Gyarto: " . $this -> gyarto . "<br>" .
        "Gyártási szám: " . $this -> gyartasiSzam . "<br>" .
        "Mennyiség: " . $this -> mennyiseg . "<br>" .
        "Megbontott: " . Gyogyszer::$megbontott . "<br>" .
        "Hatóanyag: " . $this -> hatoanyag . "<br>" .
        "Ár: " . $this -> ar . "<br>" .
        "Forgalmazó: " . $this -> forgalmazo . "<br>";
    }

    // Getter, setter nev
    public function getNev(){
        return $this -> nev;
    }

    public function setNev($nev){
        $this -> nev = $nev;
    }

    // Getter lejarat
    public function getLejarat(){
        return $this -> lejarat;
    }

    // Getter tipus
    public function getTipus(){
        return $this -> tipus;
    }

    // Getter, setter gyarto
    public function getGyarto(){
        return $this -> gyarto;
    }

    public function setGyarto($gyarto){
        $this -> gyarto = $gyarto;
    }

    // Getter gyartasiSzam
    public function getGyartasiSzam(){
        return $this -> gyartasiSzam;
    }

    // Getter, setter mennyiseg
    public function getMennyiseg(){
        return $this -> mennyiseg;
    }

    public function setMennyiseg($mennyiseg){
        $this -> mennyiseg -= $mennyiseg;
    }

    // Getter, setter megbontott
    public function isMegbontott(){
        return Gyogyszer::$megbontott;
    }

    public static function setMegbontott($megbontott){
        Gyogyszer::$megbontott = $megbontott;
    }

    // Getter, setter hatoanyag
    public function getHatoAnyag(){
        return $this -> hatoanyag;
    }

    public function setHatoAnyag($hatoanyag){
        $this -> hatoanyag = $hatoanyag;
    }

    // Getter, setter ar
    public function getAr(){
        return $this -> ar;
    }

    public function setAr($ar){
        $this -> ar = $ar;
    }

    // Getter, setter forgalmazo
    public function getForgalmazo(){
        return $this -> forgalmazo;
    }

    public function setForgalmazo($forgalmazo){
        $this -> forgalmazo = $forgalmazo;
    }

    public static function megbont(Gyogyszer $gy){
        if ($gy -> isMegbontott()) {
            return false;
        }else {
            $gy::setMegbontott(true);
            return $gy;
        }
    }
}

?>