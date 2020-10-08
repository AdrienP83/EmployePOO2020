<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Projet
 *
 * @author adrien.poignard
 */
class Projet {
    private string $codeProjet;
    private string $nomProjet;
    private int $dureePrevu;
    /**
     * Constructeur de la classe Projet
     * @param string $codeProjet
     * @param string $nomProjet
     * @param int $dureePrevu
     */
    function __construct(string $codeProjet, string $nomProjet, int $dureePrevu) {
        $this->codeProjet = $codeProjet;
        $this->nomProjet = $nomProjet;
        $this->dureePrevu = $dureePrevu;
    }
    function getCodeProjet () : int {
        return $this->codeProjet;
    }
    function getNomProjet () : string{
        return $this->nomProjet;
    }
    function getDureePrevu() : int {
        return $this->dureePrevu;
    }
    function setDureePrevu(int $dureePrevu) :void{
        $this->codeProjet = $dureePrevu;
    }
}
