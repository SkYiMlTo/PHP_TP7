<?php

include('formulaire.php');

class formulaire2 extends formulaire
{
    public function ajouterCheckBox($text, $name, $value){
        echo $text."<input type=\"checkbox\" name=\"$name\" value=\"$value\" /><br />";
    }
    public function ajouterRadio($text, $name, $value){
        echo $text."<input type=\"radio\" name=\"$name\" value=\"$value\" /><br />"; // POST[name] et on obtient value
    }
}