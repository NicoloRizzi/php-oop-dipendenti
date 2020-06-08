<?php
class Persona {
    //Properties
    public $nome;
    public $cognome;
    public $eta;

    //Constructor
    public function __construct($_nome, $_cognome, $_eta) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
    }

    //Method

    public function getInfoPerson () {
        return $this->nome . ' ' . $this->cognome . ' ' . $this->eta;
    }
}
?>