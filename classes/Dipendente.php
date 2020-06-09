<?php
include_once __DIR__ . '/Persona.php';
class Dipendente extends Persona {
    //Properties
    public $codMatricola;
    public $mansione;

    //Construct
    public function __construct($_nome, $_cognome, $_eta, $_stipendio, $_codMatricola, $_mansione) {
        parent::__construct($_nome, $_cognome, $_eta, $_stipendio);
        $this->codMatricola = $_codMatricola;
        $this->mansione = $_mansione;
    }
}
/*
$dipendenti = [
    ['Mario', 'Rossi', rand(18, 65), 'D0001', 'Operaio'],
    ['Pippo', 'Duzioni', rand(18, 65), 'D0002', 'Saldatore'],
    ['Pluto', 'Duzioni', rand(18, 65), 'D0003', 'Autista']
];
$result = [];
foreach ($dirigenti as $dirigente) {
    $result[] = new Dirigente(...$dirigente);
}*/
?>