<?php

$afkortingBands = [
        "qotsa" => "Queens of the stone age",
        "ledzep" => "Led Zeppelin",
        "soad" => "Systen of a Dwon"
];

$lijstBands ="";
foreach ($afkortingBands as $afkortingBand => $naam) {
    $lijstBands .= "<li>$naam</li>";
}

$websites = [
  'w3s' => 'www.w3schools.com',
  'hotmail' => 'www.hotmail.com',
  'qotsa' => 'www.qotsa.com'
];

$lijstSites = "";
foreach ($websites as $website=>$link) {
    $lijstSites .= "<li><a href='http://$link' target='_blank'>$website</a></li>";
}

$milkshakes = [
  'aardbei', 'banaan', 'mango', 'kiwi',
];

$lijstMilkshakes ="";
foreach ($milkshakes as $milkshake){
    $lijstMilkshakes .= "<li>$milkshake</li>";
}

$creaturen = [
  'Amélie','Nero', 'Eric', 'Obelix', 'Aldo', 'Mara',
];

$lijstCreaturen = "";
foreach ($creaturen as $creatuur){
    $lijstCreaturen .= "<li>$creatuur</li>";
}

$favorieten = [
    'websites' => $lijstSites,
    'bands' => $lijstBands,
    'milkshakes' => $lijstMilkshakes,
    'creaturen' => $lijstCreaturen
];

$lijstFavorieten ="";
$html = "";
$totaal = 0;


/* uncomment en dan: Bad Gateway: */

foreach ($favorieten as $titel => $lijst) {
    $html .= "<section><h2>" . ucfirst($titel) ." (" . count($lijst) . ")</h2><ul>";
    sort($lijst);
    foreach ($lijst as $item) {
        $html .= "<li>$item</li>";
    }
    $html .= "</ul></section>";
    $totaal += count($lijst);
}
$html .= "<p>Je hebt $totaal items .</p>";

//'<ol>';
//        foreach ($bands as $band){
////            echo "<li><a href='http://$website']' target='_blank'>$website</a></li>";
//            echo '<li><a href="' . $band['website']. '">' . $band['website'] . '</a></li>', '<br>';
//            //            echo '<p>' . $concert[0] . '</p>';
//        }
//'</ol>';

?>



<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP_01_03</title>
<!--    <link rel='stylesheet' href='css/styles.css'/>-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
</head>
<body>
<h1>PHP_02_02</h1>

<h2>Lijst favorieten.</h2>
<ol>
    <?=$html?>
</ol>

</body>
</html>
