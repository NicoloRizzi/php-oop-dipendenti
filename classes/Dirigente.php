<?php
include_once __DIR__ . '/Persona.php';
class Dirigente extends Persona {
    //Properties
    public $area;
    public $esperienza;

    //Construct
    public function __construct($_nome, $_cognome, $_eta, $_area, $_esperienza){
        parent::__construct($_nome, $_cognome, $_eta);
        $this->area = $_area;
        $this->esperienza = $_esperienza;
    }
    
}
$dirigenti = [
    ['Mark', 'Zuckerberg', rand(18, 65), 'CEO', rand()],
    ['Elon', 'Musk', rand(18, 65), rand()],
    ['Jeff', 'Bezos', rand(18, 65), rand()]
];
$result = [];
foreach ($dirigenti as $dirigente) {
    $result[] = new Dirigente(...$dirigente);
}
?>