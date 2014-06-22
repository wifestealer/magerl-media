<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 08.06.14
 * Time: 17:04
 */

class Jahreselemente {
    private $Jahr;
    private $Titel;
    private $Aktivitaet;

    function __construct($Jahr, $Titel, $Aktivitaet=null) {
        $this->Jahr = $Jahr;
        if(!is_null($Titel))
            $this->Titel = $Titel;
        if(!is_null($Aktivitaet))
            $this->Aktivitaet = $Aktivitaet;
    }

    public function __get($var) {
        return $this->$var;
    }
}

class Jahresuebersicht {
    private $Elemente = array();
    private $Titel;

    function __construct($Titel = null) {
        $this->Titel = $Titel;
    }

    public function setzeTitel($Titel) {
        if($Titel) {
            if($this->Titel = $Titel) {
                return true;
            }
        }
        return false;
    }

    public function holeElemente() {
        if($this->Elemente)
            return $this->Elemente;

        return false;
    }

    public function fuegeJahreHinzu($Jahr, $Titel=null, $Info=null) {
        $Jahreselement = new Jahreselemente($Jahr, $Titel, $Info);
        array_push($this->Elemente, $Jahreselement);
    }
} 