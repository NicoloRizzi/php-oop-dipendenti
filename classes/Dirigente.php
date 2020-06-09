<?php
include_once __DIR__ . '/Persona.php';
class Dirigente extends Persona {
    //Properties
    public $area;

    //Construct
    public function __construct($_nome, $_cognome, $_eta, $_area, $_stipendio){
        parent::__construct($_nome, $_cognome, $_eta, $_stipendio);
        $this->area = $_area;
    }
    //Methods with Exeception
    public function ral($num) {
        if (!is_int($num)) {
            throw new Exception('Is not a number');
        }
        return $num * 12;
    }

}
?>