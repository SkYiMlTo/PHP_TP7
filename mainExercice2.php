<?php

include ('shape.php');
include ('circle.php');
include ('square.php');

$cercle = new Circle(5);
$carre = new Square(2,6);


$test = array($carre, $cercle);

for($loop = 0; $loop < sizeof($test); $loop++){
    echo get_class($test[$loop])." Area :  ".$test[$loop]->getArea()."<br />";
}