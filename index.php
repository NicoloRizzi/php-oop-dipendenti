<?php
include_once __DIR__ . '/db_azienda.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="dirigenti">
        <h1>Dirigenti</h1>
        <ul>
            <li>Nome e cognome: <?php echo $dirigente1->nome . " " . $dirigente1->cognome ?></li>
            <li>Età: <?php echo $dirigente1->eta ?></li>
            <li>Ruolo: <?php echo $dirigente1->ruolo ?></li>
            <li>ID: <?php echo $dirigente1->id ?></li>
            <br/>
            <li>Nome e cognome: <?php echo $dirigente2->nome . " " . $dirigente2->cognome ?></li>
            <li>Età: <?php echo $dirigente2->eta ?></li>
            <li>Ruolo: <?php echo $dirigente2->ruolo ?></li>
            <li>ID: <?php echo $dirigente2->id ?></li>
        </ul>
        <h1>Dipendenti</h1>
        <?php foreach ($dipendenti as $dipendente) { ?>
            <ul>
                <li>Nome e Cognome: <?php echo $dipendente->nome . " " . $dipendente->cognome ?></li>
                <li>Età: <?php try {
                    echo $dipendente->checkAge($dipendente->eta);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                ?></li>
                <li>Ore lavorate: <?php echo $dipendente->orelavorate ?></li>
                <li>Mansione: <?php echo $dipendente->mansione ?></li>
            </ul>
        <?php } ?>
    </div>
</body>

</html>