<?php


$string1 = "HoLa         MuNdO me gustaria tener 5 animales en casa \t pero no tengo ninguno \n que deberia hacer \n";

echo snakeCaser($string1);


function snakeCaser(String $string) {
    $string = preg_replace('/\s+/', ' ', $string);
    $string = strtolower($string);
    $string = str_replace(' ', '_', $string);
    $string = trim($string, '_');
    return $string;
}