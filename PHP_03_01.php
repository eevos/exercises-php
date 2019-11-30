<?php

$uur = date('H');
$minuut = date('M');

if ($uur > 23 || $uur < 5) {
    header("Location: https://www.google.com/search?safe=active&ei=Zy4CXZ7uO4XJwQKZz7KQDw&q=nacht&oq=nacht&gs_l=psy-ab.3..0i67l4j0j0i67l2j0j0i67j0.3423.3843..3933...0.0..0.97.265.5......0....1..gws-wiz.......0i71j0i131j0i131i67.D2HcWMXij34");
} elseif ($uur < 23 || $uur > 5) {
    if ($minuut < 30) {
        header("Location: https://www.google.com/search?safe=active&biw=1280&bih=648&tbm=isch&sa=1&ei=UTACXZmFFuGRmwWKt6HoAQ&q=zon&oq=zon&gs_l=img.3..0i67l2j0l8.2535.2683..2861...0.0..0.42.122.3......0....1..gws-wiz-img.VssiQKNBkQw");
    } elseif ($minuut >30){
        header('Location: https://www.google.com/search?q=regen&safe=active&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjv-aaAqubiAhUPElAKHemUBgIQ_AUIECgB&biw=1280&bih=648');
    }
};

