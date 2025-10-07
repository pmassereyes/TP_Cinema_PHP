<?php 

Class Film {
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;
    private Realisateur $realisateur;
    private $tabActeurs = [];

    public function __construct(int $idFilm, string $nomFilm, int $nbEntrees, Realisateur $realisateur, $tabActeurs) {
        $this->idFilm = $idFilm;
        $this->nomFilm = $nomFilm;
        $this->nbEntrees = $nbEntrees;
        $this->realisateur = $realisateur;
        $this->tabActeurs = $tabActeurs;
    }
    public function getIdFilm(): int {
        return $this->idFilm;
    }
    public function getNomFilm(): string {
        return $this->nomFilm;
    }
    public function getNbEntrees(): int {
        return $this->nbEntrees;
    }
    public function setNbEntrees(int $nbEntrees): void {
        $this->nbEntrees = $nbEntrees;
    }
    public function getRealisateur(): Realisateur {
        return $this->realisateur;
    }
    public function getActeurs(): array {
        return $this->tabActeurs;
    }


}