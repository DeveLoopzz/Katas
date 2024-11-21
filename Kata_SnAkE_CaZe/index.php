<?php


$string1 = "HoLa  $$$$$$ Ñ ñ   MuNdO";

echo $string1;

echo "<br>";

echo snakeCaser($string1);


function snakeCaser(String $string) {
    $string = preg_replace('/[^a-zA-Z0-9\s]/', ' ', $string);
    $string = preg_replace('/\s+/', ' ', $string);
    $string = strtolower($string);
    $string = str_replace(' ', '_', $string);
    $string = trim($string, '_');
    return $string;
}