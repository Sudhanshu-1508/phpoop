<?php

/*
class LightSwitch{
    public function on(){

    }

    public function off(){

    }

    private function connect(){

    }

    private function activate(){

    }
} */


class Person {

    private $name;
    private $age;

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

    public function getAge(){
        return $this->age;
    }
}

$obj = new Person("Sudhanshu");

$obj->setAge("22");

$var = $obj->getAge();

echo $var;