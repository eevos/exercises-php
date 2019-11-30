<?php
$bands = [
    [
        "band" => "qotsa",
        "email" => "billy@qotsa.com",
        "concerts" => ["pinkpop", "013"]
    ],
    [
        "band" => "ledzeppelin",
        "email" => "alex@ledzep.com",
        "concerts" => ["appelpop", "lowlands"]
    ],
    [
        "band" => "soad",
        "email" => "pete@soad.com",
        "concerts" => ["blauwpop", "groenpop"]
    ]
];

//    foreach ($bands as $band) {
//        echo $band["band"] . '<br>';
//    };

$bands[2]["info"] = "Spelen niet op zondag.";
echo "<pre>", var_dump($bands), "</pre>";
