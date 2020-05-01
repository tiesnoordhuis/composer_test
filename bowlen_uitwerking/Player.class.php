<?php

class Player {
    public $name;
    public $pinsThrown;

    public function __construct($name) {
        $this->name = $name;
        $this->pinsThrown = [];
    }

    public function throwPins($throw1, $throw2 = 0) {
        $this->pinsThrown[] = [$throw1, $throw2];
    }

}