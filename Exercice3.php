<?php

trait UN{
    public function small($text){
        echo "<small>".$text."</small><br />";
    }
    public function big($text){
        echo "<h4>".$text."</h4><br />";
    }
}

trait DEUX{
    public function small($text){
        echo "<i>".$text."</i><br />";
    }
    public function big($text){
        echo "<h2>".$text."</h2><br />";
    }
}

class Texte{
    use UN, DEUX{
        DEUX::small insteadof UN;
        UN::big insteadof DEUX;

        DEUX::big as gros;
        UN::small as petit;
    }
}

$instance = new Texte();
$text = "Mon texte bg";
$instance->small($text);    // <i>
$instance->big($text);  // <h4>
$instance->gros($text); // <h2>
$instance->petit($text);    // <small>