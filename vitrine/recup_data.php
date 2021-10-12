<?php
    $resultat=require_once("bakend.php");

    //recuperation des donnes de la base de donnees
    $recup=$pdo->prepare("SELECT * FROM personnage");
    $recup->execute();
    
    //recuperation des donnes dans resultats
    $resultat= $recup->fetchAll(PDO::FETCH_ASSOC);

    return $resultat;

 
    
?>