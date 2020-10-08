<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Traitement
 *
 * @author adrien.poignard
 */
class Traitement {
    public static function instanciationUnEmploye () : void{
        $e = new Employe (1,"Dupont","Jacques",new DateTime("12/07/1980"),1000.00);
        echo $e;
    }
    public static function instanciationEmployeErreur():void{
        $e=new employe(2,"Durand","Sylvie",new DateTime("1975/06/14"),800.00);
    }
}
