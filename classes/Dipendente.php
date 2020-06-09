<?php
include_once __DIR__ . '/Persona.php>';

class Dipendente extends Persona {
    //PROPERTIES
    public $orelavorate;
    public $mansione;

    //CONSTRUCT
    PUBLIC function __construct($_nome, $_cognome, $_eta,$_orelavorate,$_mansione){
        parent::__construct($_nome, $_cognome, $_eta);
        $this->orelavorate = $_orelavorate;
        $this->mansione = $_mansione;
    }
}