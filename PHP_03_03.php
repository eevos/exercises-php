<?php

$html = "";

$getal1 = 4;
$getal2 = 19;

$html = "<h1>Wie is deelbaar door " . $getal1 . " en " . $getal2 . " ? </h1>";

$i = 0;
while ($i < 1000 ){
    if($i % $getal1 ==0 && $i % $getal2 == 0){
        $html .= "<span>$i = </span>" . $i/$getal1 . " <span> x $getal1 en </span>" . $i/$getal2 . " x $getal2 <br>";
    }
    $i++;
}
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP_03_02</title>
    <!--    <link rel='stylesheet' href='css/styles.css'/>-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <style>
        span {
            display: inline-block;
            width: 4em;
        }
    </style>

</head>
<body>

<?= $html ?>

</body>
</html>

