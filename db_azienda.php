<?php
include_once __DIR__ . '/classes/Dirigente.php';
include_once __DIR__ . '/classes/Dipendente.php';

$dipendenti = [
        new Dipendente('Prova1','Prova2', 'a', 10, 'Operaio' ),
        new Dipendente('Pippo','Duzioni', 10, 1, 'Saldatore'),
    ];

$dirigente1 = new Dirigente('Paolo','Duzioni',random_int(20,40),'CEO', 1);
$dirigente2 = new Dirigente('Nicolò','Rizzi', 24, 'Responsabile Acquisti', 2);
