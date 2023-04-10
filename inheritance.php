<?php

abstract class Shape {
    protected $color;
    
    public function __construct($color = 'red')  {
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

    abstract protected function Area();
}

class Square extends Shape{

    protected $length= 3;

    public function Area(){
        return $this->length * $this->length;
    }
}

class Triangle extends Shape{
    protected $base=4, $height=5;

    public function Area(){
        return (0.5 * $this->base * $this->height); 
    }
}


 $sq = new Square(3);

 echo ($sq->Area(3));