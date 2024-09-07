<?php

Class fighter {
    private string $name;
    private int $health;
    private int $attack;
    private int $defense;

    public function __construct($name,$attack, $defense, $health = 10) {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
        $this->defense = $defense;
    }

    public function getName(){
        return $this->name;
    }

    public function getAttack(){
        return $this->attack;
    }

    public function getDefense(){
        return $this->defense;
    }

    public function getHealth(){
        return $this->health;
    }

    public function lowerHealth(int $difference) {
        $this->health -= $difference;
    }
}