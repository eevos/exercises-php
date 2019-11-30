<?php
$naam = "Edwin";
$leeftijd = 35;
$gewicht = 85;
$getrouwd = false;
$html="
    <p>
        <em>$naam</em> is een variabele van het type
        <?=strtoupper(gettype($naam))?>
        en heeft de waarde
        <strong><?=$naam?></strong>
</p>
<p>
    <em>$leeftijd</em> is een variabele van het type
    <?=strtoupper(gettype($leeftijd))?>
    en heeft de waarde
    <strong><?=$leeftijd?></strong>
</p>
"
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP_01_03</title>
    <link rel='stylesheet' href='css/styles.css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>PHP_01_03</h1>
<p>
        <em>$naam</em> is een variabele van het type
        <?=strtoupper(gettype($naam))?>
        en heeft de waarde
        <strong><?=$naam?></strong>
</p>
<p>
    <em>$leeftijd</em> is een variabele van het type
    <?=strtoupper(gettype($leeftijd))?>
    en heeft de waarde
    <strong><?=$leeftijd?></strong>
</p>
<p>
    <br>Het aantal tekens is: <?=strlen($html)?>
</p>

<h1>Tekst zonder html-tags</h1>
<?=strip_tags($html, "<n>")?>
</html>
