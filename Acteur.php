<?php

Class Acteur {
    private string $nomActeur;
    private string $prenomActeur;
    private bool $estCesarise;

    public function __construct(string $nomActeur, string $prenomActeur, bool $estCesarise){
        $this->nomActeur = $nomActeur;
        $this->prenomActeur = $prenomActeur;
        $this->estCesarise = $estCesarise;
    }

    public function getNomActeur():string{
        return $this->nomActeur;
    }
    public function getPrenomActeur():string{
        return $this->prenomActeur;
    }
    public function getEstCesarise():bool{
        return $this->estCesarise;
    }
    public function setEstCesarise():bool{
        $this->estCesarise = $estCesarise;
    }
    
}
