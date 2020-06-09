<?php
class Persona {
    //PROPERTIES
    public $nome;
    public $cognome;
    public $eta;

    //CONSTRUCT
    public function __construct($_nome, $_cognome, $_eta) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
    }

    //METHODS
    public function checkAge($_eta) {
        if (!is_int ($this->eta) ) {
            throw new Exception ('Attenzione, il dato non è un INTERO');
        } elseif ($this->eta < 18) {
            throw new Exception ('Junior');
        } elseif ($this->eta > 30) {
            throw new Exception ('Senior');
        }
        return $_eta;
    }
}

?>