<?php

include  "Film.php";

//Instancier un objet de type « Film » et afficher ses informations
$filmF1 = new Film(1, "BAC Nord", 563921);
echo "Le film Bac Nord : ".$filmF1->getIdFilm() . " - " . $filmF1->getNomFilm(). " - ". $filmF1->getNbEntrees() . "\n";

//Modifier le nombre d’entrées du film et afficher ses informations
$filmF1->setNbEntrees(657450);
echo "Modification du nombre d'entrées ==> " . "\n " . $filmF1->getIdFilm() . " - " . $filmF1->getNomFilm(). " - ". $filmF1->getNbEntrees() . "\n";

//Instancier d’autres objets de type « Film » dans un tableau et afficher les informations de chaque film
$films = [
    $filmF2 = new Film(2, "Boîte noire", 2003458),
    $filmF3 = new Film(3, "The Batman", 1523984),
];
foreach ($films as $film) {
    echo "Infos sur le film :==> ". "\n" . $film->getIdFilm() . " - " . $film->getNomFilm(). " - ". $film->getNbEntrees() . "\n";
}

//Nous souhaitons maintenant connaître le réalisateur pour chaque film.
