<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'classes/employe.php';
include 'includes/Traitement.php';
include 'classes/Projet.php';
include 'classes/EmployeNonInformaticien.php';

try{
    //Traitement ::instanciationUnEmploye(); //appele de la fonction instanciationUnEmploye qui renvoie l'employe créer
    //Traitement :: instanciationEmployeErreur(); //renvoie une exception
    Traitement::instanciationUnEmploye(); //le programme s'arrete après l'exception
    Traitement::instanciationProjetV1();
    
} catch (Exception $ex) {
    echo $ex ->getMessage();
}
