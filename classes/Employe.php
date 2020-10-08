<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author adrien.poignard
 */
class Employe {
    protected  int $numero;
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDeNaissance;
    protected float $salaireM;
   private const MINSALAIRE = 1000;
    
    /**
     * Constructeur de la classe Employe
     * @param int $numero
     * @param string $nom
     * @param string $prenom
     * @param DateTime $dateDeNaissance
     * @param float $salaireM
     */
    function __construct(int $numero, string $nom, string $prenom, DateTime $dateDeNaissance, float $salaireM) {
        $this->numero = $numero;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->setSalaireM($salaireM);
    }
    function getNumero(): int {
        return $this->numero;
    }

    function getNom(): string {
        return $this->nom;
    }

    function getPrenom(): string {
        return $this->prenom;
    }

    function getDateDeNaissance(): DateTime {
        return $this->dateDeNaissance;
    }

    function getSalaireM(): float {
        return $this->salaireM;
    }

    function setSalaireM(float $salaireM): void {
        if($salaireM >= self::MINSALAIRE){
            $this->salaireM = $salaireM;
        }
        else{
            throw new Exception("le salaire ne doit pas être inférieur à ".self::MINSALAIRE);
        }
    }
    public function __toString() : string {
        return $this->numero . " - " .$this->getNom() . " - " .$this->getPrenom(). " - "
                .$this ->dateDeNaissance->format('d/m/Y') . " - ". $this->getSalaireM();
    }


    
}
