<?php
$clubs = ['Vitesse', 'NEC', 'PEC Zwolle', 'Feyenoord'];
$websites = [
    'W3Schools' => 'www.w3schools.com',
    'Hogesdchool HAN' => 'www.han.nl',
    'hotmail' => 'www.hotmail.com'
];
$groenten = [ 'asperge', 'banaan', 'schorseneer'];
$dieren = ['aldo', 'mara', 'obelix', 'nero'];

$favorieten = [ 'voetbalclubs' => $clubs, 'websites' => $websites, 'eten' => $groenten, 'huisdieren' => $dieren ];
$html = "";
$totaal = 0;

foreach ($favorieten as $titel => $lijst){
    $html .= "<section><h2>" . ucfirst($titel) . " (" . count($lijst) .")</h2><ul>";
    sort($lijst);
    foreach ($lijst as $item){
        $html .= "<li>$item</li>";
    }
    $html .= "</ul></section>";
    $totaal += count($lijst);
}
$html .= "<p>Je hebt $totaal aantal items.</p>";

?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP_01_03</title>
    <!--    <link rel='stylesheet' href='css/styles.css'/>-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<style>
    section {
        float: left;
        margin-right: 2em;
    }
    section h2 {
        text-align: center;
    }
    p { clear: both;}
</style>

</head>
<body>

<h1>Lijst favorieten.</h1>

    <?=$html?>

</body>
</html>

