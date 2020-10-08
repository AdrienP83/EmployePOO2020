<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'classes/employe.php';
include 'includes/Traitement.php';

try{
    Traitement ::instanciationUnEmploye();
    Traitement :: instanciationEmployeErreur();
    Traitement ::instanciationUnEmploye();
    
} catch (Exception $ex) {
    echo $ex ->getMessage();
}
