<?php

class Game {
    
    protected string $player1;
    protected string $player2;
    protected array $sets;

    public function __construct(string $player1, string $player2, array $sets)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->sets = $sets;
    }

    public function printFullscore() 
    {
        $i = 1;
        foreach($this->sets as $sets) {
            echo "Set " . $i .  " P1 " . $sets[0] . "-" . $sets[1] . " P2 " . PHP_EOL;
            $i++;
        }
    }

    public function printWinner() 
    {   
        $p1 = 0;
        $p2 = 0;   
            foreach($this->sets as $sets){
                if($sets[0] > $sets[1]) {
                    $p1++;
                }
                else{
                    $p2++;
                }
            }
            if($p1 == 3) {
                return "Player1 is the Winner" . PHP_EOL;
            }
            elseif($p2 == 3) {
                return "Player2 is the Winner" . PHP_EOL;
            }
            else{
                return "No Winner" . PHP_EOL;
            }
    }

    public function printDifference() 
    {   
        $maxDiff = -1;
        foreach($this->sets as $sets){
            $diff = abs($sets[0] - $sets[1]);
            if($diff > $maxDiff) {
                $maxDiff = $diff;
            }
        }

        return $maxDiff . PHP_EOL;
    }
}