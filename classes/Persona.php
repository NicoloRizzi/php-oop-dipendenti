<?php
class Persona {
    //Properties
    public $nome;
    public $cognome;
    public $eta;
    public $stipendio;

    //Constructor
    public function __construct($_nome, $_cognome, $_eta, $_stipendio) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->stipendio = $_stipendio;

    }

    //Method

    public function getInfoPerson () {
        return $this->nome . ' ' . $this->cognome . ' ' . $this->eta . ' €' .$this->stipendio;
    }
}
?>