<?php

class Task{
    protected $var;
    public function __construct($var) {
        $this->var = $var;
    }

    function Desc($var) {
        echo "Hello " . $var;
    }
}

$task = new Task("Sudhanshu");

$task->Desc();