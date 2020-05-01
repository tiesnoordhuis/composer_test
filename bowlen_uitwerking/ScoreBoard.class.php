<?php

class ScoreBoard {
    public $players;
    public $round;
    public $scores;

    public function __construct() {
        $this->players = [];
        $this->round = 1;
        $this->scores = []
    }

    public function AddPlayer($newPlayerName) {
        $newPlayer = new Player($newPlayerName);
        $this->players[] = $newPlayer;
    }

    public function calculatePlayerScore($player) {
        $pointsPerRound = [];
        foreach($player->pinsThrown as $index => $throws) {
            $pointsPerRound[] = $throws[0] + $throws[1];
        };

        foreach($player->pinsThrown as $index => $throws) {
            if ($throws[0] === 10) {
                $pointsPerRound[$index] += $pointsPerRound[$index + 1];
            } elseif ($pointsPerRound[$index] === 10) {
                $pointsPerRound[$index] += $player->pinsThrown[$index + 1][0];
            }
        }
        return array_sum($pointsPerRound);
    }

    public function calculateAllScores() {
        foreach ($this->players as $player) {
            $this->scores[$player->name] = $this->calculatePlayerScore($player);
        }
    }

    public function displayScores() {
        $this->calculateAllScores();
        foreach($this->scores as $name => $score) {
            print_r("$name: $score" . PHP_EOL);
        }
    }
}