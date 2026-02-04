<?php

class Fusee {

    private $nom;

    private $niveauCarburant =0;

    private $equipage = [];

    private $estLancee =false;

    private $fusee;


    public function __construct(string $nom){

        $this->nom = $fusee;

    }

    public function getNom(){

        return $this->nom;
    }

    public function ajouterCarburant($litres){

        if ($litres < 0) {
            throw new Exception("Pas de siphonage !");
        }

        $this->niveaucarburant += $litres;
    }

    public function embarquerAstronaute($nom) {
        $this->equipage[] = $nom;
    }

    public function getEquipage(){
        return $this->equipage;
    }

    public function decoller(){

        if ($this->carburant < 100) {
            return "Echec";
        }
    
        $this->estLancee = true;
        return "Succès";
    }

    public function calculerPortee($fuel){
        
        return $fuel * 2.5;
    }

}



?>