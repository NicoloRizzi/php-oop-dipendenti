<?php
include_once __DIR__ . '/classes/Dirigente.php';
include_once __DIR__ . '/classes/Dipendente.php';

$dirigente = new Dirigente('Pippo', 'Pluto' , 10 , 'CEO' , 100);

$dipendente = new Dipendente('Luca','Duzioni', 20, 200, 'A001','OPERAIO');

echo "Dirigente: {$dirigente->getInfoPerson()} <br>";

try {
    echo ral($stipendio)
} catch (Exception $e) {
    echo $e->getMessage();
}
?>