<?php
include_once __DIR__ . '/Persona.php';

class Dirigente extends Persona {
    //PROPERTIES
    public $ruolo;
    public $id;

    //CONSTRUCT
    public function __construct($_nome, $_cognome, $_eta, $_ruolo, $_id) {
        parent::__construct($_nome, $_cognome, $_eta);
        $this->ruolo = $_ruolo;
        $this->id = $_id;
    }
}