<?php

class Realisateur extends Film {
    private string $nomRealisateur;
    private string $prenomRealisateur;
    public function __construct(int $idFilm, string $nomFilm, int $nbEntrees, string $nomRealisateur, string $prenomRealisateur) {
        parent::__construct($idFilm, $nomFilm, $nbEntrees);
        $this->nomRealisateur = $nomRealisateur;
        $this->prenomRealisateur = $prenomRealisateur;
    }
    public function getNomRealisateur(): string {
        return $this->nomRealisateur;
    }
    public function getPrenomRealisateur(): string {
        return $this->prenomRealisateur;
    }
}