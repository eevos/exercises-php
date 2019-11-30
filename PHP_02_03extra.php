<?php

$eten = ['pannekoek' => 8.70, 'hamburger' => 5.50, 'broodje gezond' => 4.00,];

$drinken = ['cola' => 2.00, 'spa rood' => 1.60, 'biertje' => 2.30, 'witte wijn' => 3.20, 'rode wijn' => 3.20,];

$menuEten = "";
foreach ($eten as $gerecht => $prijs) {
    $menuEten .= "<p>" . ucfirst($gerecht) . "<span>€ " . $prijs . "</span></p>";
}

$menuDrinken = "";
foreach ($drinken as $drankje => $prijs) {
    $menuDrinken .= "<p>" . ucfirst($drankje) . "<span>€ " . $prijs . "</span></p>";
}

?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP_01_03</title>
    <!--    <link rel='stylesheet' href='css/styles.css'/>-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <style>
        body {
            width: 20em;
            margin: 30px auto;
            border: 1px solid black;
            padding: 2em;
        }

        h1 {
            text-align: center;
        }

        span {
            float: right;
        }
    </style>

</head>
<body>
<h1>PHP_02_02</h1>

<h2>Eten</h2>
<?= $menuEten ?>

<h2>Drinkne</h2>
<?= $menuDrinken ?>

</body>
</html>

