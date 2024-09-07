<?php 

require 'fighter.php';

$fighter1 = new fighter("Nidalee",7,4);
$fighter2 = new fighter("Renekton",6,4);

fight($fighter1, $fighter2);

function equalFight(fighter $fighter1, fighter $fighter2){
    do{
    $num = rand(1,2);
    if($num === 1){
        $difference = $fighter1->getAttack() - $fighter2->getDefense();
        $fighter2->lowerHealth($difference);
        echo $fighter1->getName() . " wins, " . $fighter2->getName() . " HP: " . $fighter2->getHealth()  . "<br>";
    }
    else if($num === 2){
        $difference = $fighter2->getAttack() - $fighter1->getDefense();
        $fighter1->lowerHealth( $difference);
        echo $fighter2->getName() . " wins, " . $fighter1->getName() . " HP: " . $fighter1->getHealth()  . "<br>";
    }
} while($fighter1->getHealth() > 0 && $fighter2->getHealth() > 0);

    if($fighter1->getHealth() <= 0) {
        echo $fighter1->getName() . " K.O";
    }
    else if($fighter2->getHealth() <= 0) {
        echo $fighter2->getName() . " K.O";
    }
}

function f1wins(fighter $fighter1, fighter $fighter2) {
    do{
        $num = rand(0,100);
        if($num <= 70) {
            $difference = $fighter1->getAttack() - $fighter2->getDefense();
            $fighter2->lowerHealth($difference);
            echo $fighter1->getName() . " wins, " . $fighter2->getName() . " HP: " . $fighter2->getHealth()  . "<br>";
        }
        else {
            $difference = $fighter2->getAttack() - $fighter1->getDefense();
            $fighter1->lowerHealth($difference);
            echo $fighter2->getName() . " wins, " . $fighter1->getName() . " HP: " . $fighter1->getHealth()  . "<br>";
        }
        } while($fighter1->getHealth() > 0 && $fighter2->getHealth() > 0); 

        if($fighter1->getHealth() <= 0) {
            echo $fighter1->getName() . " K.O";
        }
        else if($fighter2->getHealth() <= 0) {
            echo $fighter2->getName() . " K.O";
        }
}

function f2wins(fighter $fighter1, fighter $fighter2) {
    do{
        $num = rand(0,100);
        if($num <= 70) {
            $difference = $fighter2->getAttack() - $fighter1->getDefense();
            $fighter1->lowerHealth($difference);
            echo $fighter2->getName() . " wins, " . $fighter1->getName() . " HP: " . $fighter1->getHealth()  . "<br>";
        }
        else {
            $difference = $fighter1->getAttack() - $fighter2->getDefense();
            $fighter2->lowerHealth($difference);
            echo $fighter1->getName() . " wins, " . $fighter2->getName() . " HP: " . $fighter2->getHealth()  . "<br>";
        }
    } while($fighter1->getHealth() > 0 && $fighter2->getHealth() > 0); 

    if($fighter1->getHealth() <= 0) {
        echo $fighter1->getName() . " K.O";
    }
    else if($fighter2->getHealth() <= 0) {
        echo $fighter2->getName() . " K.O";
    }
}

function fight(fighter $fighter1, fighter $fighter2) {   
    if($fighter1->getAttack() === $fighter2->getAttack()){
        equalFight($fighter1, $fighter2);
    }
    else if($fighter1->getAttack() > $fighter2->getAttack()) {
        f1wins($fighter1, $fighter2);
    }
    else if($fighter2->getAttack() > $fighter1->getAttack()) {
       f2wins($fighter1, $fighter2);
    }

}

