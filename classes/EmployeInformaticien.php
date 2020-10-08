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
    private Projet $sonProjet;
    /**
     * Constructeur de la classe Employe
     * @param int $numero
     * @param string $nom
     * @param string $prenom
     * @param DateTime $dateDeNaissance
     * @param float $salaireM
     * @param type $PrimeM
     */
    function __construct (int $numero, string $nom, string $prenom, DateTime $dateDeNaissance, float $salaireM,$primeM, Projet $sonProjet){
    parent::__construct($numero, $nom, $prenom, $dateDeNaissance, $salaireM);
    if ($primeM === 0){
        $this ->primeM = $primeM;
    }
    else {
        throw new Exception("La prime doit être initialisée à 0");
    }
    $this->sonProjet = $sonProjet;
    }
    /*
     * Getter et Setter 
     */
    function getPrimeM(): int {
    return $this->primeM;
    }

 function getSonProjet(): Projet {
    return $this->sonProjet;
    }
    
    function setPrimeM(int $primeM): void {
        if($primeM <= (parent::salaireM*0.8)){ // prime doit être inférieur à 30ù du salaire
            $this->primeM = $primeM;
        }
        else{
            throw new Exception("La prime ne doit pas excéder 30% du salaire");
        } 
    }

}




