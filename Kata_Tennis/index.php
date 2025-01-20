<?php

//DOY PRESUPUESTO QUE LOS VALORES INTRODUCIDOS EN EL ARRAY SON VALIDOS

require 'game.php';

$array = [
    "set_1" => [6,1],
    "set_2" => [6,2],
    "set_3" => [6,2],
];

$game1 = new Game("pepito", "palotes", $array);

$game1->printFullscore();
echo $game1->printWinner();
echo $game1->printDifference();
