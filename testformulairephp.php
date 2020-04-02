<?php

include('formulaire2.php');

$formulaire = new formulaire2("post", "testformulairephp.php");
$formulaire->ajouterzonetexte("Votre nom : ", "text1");
$formulaire->ajouterzonetexte("Votre code : ", "text2");
$formulaire->ajouterbouton();
$formulaire->ajouterRadio("Homme", "Civilité", "Homme");
$formulaire->ajouterRadio("Homme", "Civilité", "Femme");
$formulaire->ajouterCheckBox("Tennis", "tennis", "Tennis");
$formulaire->ajouterCheckBox("Equitation", "equitation", "Equitation");
$formulaire->getform();

?>