<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10.06.14
 * Time: 18:55
 */

class Faehigkeit {
    private $Faehigkeit;
    private $Einstufung;

    function __construct($Faehigkeit, $Einstufung) {
        $this->Faehigkeit = $Faehigkeit;
        $this->Einstufung = $Einstufung;
    }

    public function __get($name) {
        if($this->{$name}) {
            return $this->{$name};
        }
        return false;
    }
}


class Faehigkeitenbaum {
    private $aFaehigkeiten = array();

    function __construct() {

    }

    public function getFaehigkeiten() {
        return $this->aFaehigkeiten;
    }

    public function fuegeFaehigkeitHinzu($Faehigkeit, $Einstufung) {
        $oFaehigkeit = new Faehigkeit($Faehigkeit, $Einstufung);
        array_push($this->aFaehigkeiten, $oFaehigkeit);
        return $oFaehigkeit;
    }
}