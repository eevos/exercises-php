<?php
$aantalhamburgers = 2;
$aantalmilkshakes = 1;
$aantalcolas = 1;

$hamburger = 6.95;
$milkshake = 2.75;
$cola = 1.80;
$btw = 0.06;
$fooi = 0.1;
$totaabedragzonderbtw = $aantalhamburgers * $hamburger + $aantalmilkshakes * $milkshake + $aantalcolas * $cola;
$totaalbedragmetbtw = $totaabedragzonderbtw + $btw * $totaabedragzonderbtw;
$totaalbedragmetbtwenfooi = $totaalbedragmetbtw + $totaalbedragmetbtw * $fooi;

$totaalbtw = $btw * $totaabedragzonderbtw;
$totaalfooi = $fooi * $totaalbedragmetbtw;

$opsomming = "
    $aantalhamburgers hamburger à € $hamburger <br>
    $aantalcolas hamburger à € $cola <br>
    $aantalmilkshakes milkshake à € $milkshake <br>
    Totaal: $totaalbedragmetbtwenfooi <br>
    btw: $totaalbtw <br>
    fooi: $totaalfooi <br>
";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <link rel='stylesheet' href='css/styles.css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<h1>Php-oefeningen</h1>
<h2>opdracht 1: Restaurantrekening</h2>

<div class="article-grid-item-bon">
    <h3>Bon</h3>
    <table>
        <tr>
            <td>Hamburger à <?= $hamburger ?></td>
            <td> € <?= number_format(2 * $hamburger, 2) ?></td>
        </tr>
        <tr>
            <td>Milkshake à <?= $hamburger ?></td>
            <td> € <?= number_format(1 * $milkshake, 2) ?></td>
        </tr>
        <tr>
            <td>Cola à <?= $hamburger ?></td>
            <td> € <?= number_format(2 * $cola, 2) ?></td>
        </tr>
        <tr class="totaal">
            <td><strong>Totaal incl btw excl fooi</strong></td>
            <td><strong>€ <?= number_format(1 * $totaalbedragmetbtw, 2) ?></strong></td>
        </tr>
        <tr>
            <td>Fooi: € <?= number_format(1 * $totaalfooi, 2) ?></td>
        </tr>
        <tr>
            <td>Btw: € <?= number_format(1 * $totaalbtw, 2) ?></td>
        </tr>
    </table>
</div>





</body>
</html>