<?php


class Circle extends shape
{
    private $radius;

    function getArea()
    {
        return 2*PI()*$this->radius;
    }

    function __construct($rayon) {
        $this->radius = $rayon;
    }
}

?>