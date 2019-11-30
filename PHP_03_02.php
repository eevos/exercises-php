<?php

$html = "<table>";

for ($i = 0; $i < 5; $i++) {
    $html .= "<tr>";
    for ($j = 0; $j < 5; $j++) {
        if ($i % 2 == $j % 2) {
            $html .= "<td class='black'>" . $i . $j . "</td>";
        } else {
            $html .= "<td>" . $i . $j . "</td>";
        }
    }
    $html .= "</tr>";
}

$html .= "</table>";

?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP_03_02</title>
    <!--    <link rel='stylesheet' href='css/styles.css'/>-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <style>

        table {
            margin: 30px;
        }
        td {
            border: 1px solid red;
            padding: 10px;

        }

        .black {
            background-color: green;
        }
    </style>

</head>
<body>

<?= $html ?>

</body>
</html>

