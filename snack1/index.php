<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->


<?php

    $matches = [
        [
            "Casa" => "Olimpia Milano",
            "Ospite" => " Cantù",
            "PunteggioCasa" => "55",
            "PunteggioOspite" => "60"
        ],
        [
            "Casa" => "Virtus Padova",
            "Ospite" => "Torino",
            "PunteggioCasa" => "88",
            "PunteggioOspite" => "42"
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snack1</title>
</head>
<body>
    <h1>DAY 7 MATCHES RESULTS</h1>

    <?php foreach($matches as $match) : ?>
        <p>
            <?= 
                $match["Casa"] . " - " . $match["Ospite"] . " | " . $match["PunteggioCasa"] . " - " . $match["PunteggioOspite"]
            ?>
        </p>
    <?php endforeach; ?>    
    
</body>
</html>