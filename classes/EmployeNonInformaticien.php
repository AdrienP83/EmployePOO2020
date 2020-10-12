<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeNonInformaticien
 *
 * @author Rectorat
 */
class EmployeNonInformaticien extends Employe {
    private int $primeA; 
    /**
     * Constructeur de la classe EmployeNonInformaticien
     * @param int $numero
     * @param string $nom
     * @param string $prenom
     * @param DateTime $dateDeNaissance
     * @param float $salaireM
     */
    function __construct (int $numero, string $nom, string $prenom, DateTime $dateDeNaissance,
            float $salaireM){
        parent::__construct($numero, $nom, $prenom, $dateDeNaissance, $salaireM);
        $this->primeA = 0;     //la prime est valoriser à 0 lors de la déclaration d'un Employe          
    }
    function getPrimeA(): int {
        return $this->primeA;
    }

    function setPrimeA(int $primeA): void {
        if ($primeA < $this->salaireM){ //Si la prime 
            $this->primeA = $primeA;    //annuelle est inférieur au salaire mensuel alors on prend la valeur
        }
        else {
            $this->primeA = $this->salaireM; //sinon la prime est égale au salaire
        }      
    }


}
