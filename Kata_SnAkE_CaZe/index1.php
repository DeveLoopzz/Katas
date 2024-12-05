<?php

function toSnakeCase(string $input): string{

    //handle input
    $lower = strtolower($input);
    $curated = transliterator_transliterate('Any-Latin; Latin-ASCII;', $lower);
    
    $allowed = "abcdefghijklmnopqrstuvwxyz0123456789";
    $toArr = [];
    foreach(explode(" ", $curated) as $word){
        $wordArr = [];
        foreach(str_split($word) as $letter){
            if(in_array($letter, str_split($allowed))){
                array_push($wordArr, $letter);
            }
        }
        array_push($toArr, implode("", $wordArr));
    }
    
    $toStr = implode("_", $toArr);
    $removeDuplicates = preg_replace("/_+/", "_", $toStr);
    return trim($removeDuplicates, "_");
}

$test = [
    "Hola", 
    "Este es un string más largo para comprobar cómo se manejan entradas extensas en el programa.",
    "Usuario1234",
    "😀👍🎉💻✨",
    "¡Hola, mundo! ¿Qué tal? @#$%^&*()_+",
    "Hello, こんにちは, مرحبا, привет",
    "    Esto tiene espacios al inicio y tabs\t\t",
    "{\"nombre\": \"Juan\", \"edad\": 30}",
    "Línea 1\nLínea 2\nLínea 3",
    ""
];

foreach($test as $key=>$t){
    echo ($key + 1) . ": " . toSnakeCase($t) . PHP_EOL . PHP_EOL;
}