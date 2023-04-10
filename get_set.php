<?php

class Person {

    public $name;
    public $age;

    public function __construct($name) {
        $this->name= $name;
    }

    public function setAge($age) {
        if($age >18){
        $this->age= $age;
    } else{
        throw new Exception("Age not valid");
    }

    }

    public function getAge( $age ){
        return $age;
    }
}