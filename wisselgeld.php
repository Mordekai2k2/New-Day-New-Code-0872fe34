<?php
// AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
$boomer = intval ($argv[1]);
var_dump($boomer);

// Constantinopel Arrayicuz
$boi = array(
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
);

// Honey loops met 4 granen en honing
foreach ($boi as $yeet) {
    If ($boomer >= $yeet) {
        $moneh = floor ($boomer / $yeet);
        echo "$moneh x €$yeet,-" . PHP_EOL;
        $boomer = $boomer % $yeet;
    }
};
