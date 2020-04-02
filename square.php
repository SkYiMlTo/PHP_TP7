<?php


class Square extends shape {
    private $height;
    private $width;

    function getArea()
    {
        return $this->width*$this->height;
    }

    function __construct($hauteur, $largeur) {
        $this->height = $hauteur;
        $this->width = $largeur;
    }
}

?>