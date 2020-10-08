<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeInformaticien
 *
 * @author adrien.poignard
 */
class EmployeInformaticien extends Employe{
    private int $primeM;
    /**
     * Constructeur de la classe Employe
     * @param int $numero
     * @param string $nom
     * @param string $prenom
     * @param DateTime $dateDeNaissance
     * @param float $salaireM
     * @param type $PrimeM
     */
    function __construct (int $numero, string $nom, string $prenom, DateTime $dateDeNaissance, float $salaireM,$PrimeM){
    parent::__construct($numero, $nom, $prenom, $dateDeNaissance, $salaireM);
    $this ->$primeM = $primeM;
    }

}
