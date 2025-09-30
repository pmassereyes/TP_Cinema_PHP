<?php

include  "Film.php";

//Instancier un objet de type « Film » et afficher ses informations
$bacNord = new Film(1, "BAC Nord", 563921);
echo "Le film Bac Nord : ".$bacNord->getIdFilm() . " - " . $bacNord->getNomFilm(). " - ". $bacNord->getNbEntrees() . "\n";

//Modifier le nombre d’entrées du film et afficher ses informations
$bacNord->setNbEntrees(657450);
echo "Le film Bac Nord : ".$bacNord->getIdFilm() . " - " . $bacNord->getNomFilm(). " - ". $bacNord->getNbEntrees() . "\n";

//Instancier d’autres objets de type « Film » dans un tableau et afficher les informations de chaque film
$films = [
    new Film(2, "La vie d'Ilan", 2003458),
    new Film(3, "La vie de Roni", 1523984),
    new Film(4, "La vie de Ruben", 1200000),
];
foreach ($films as $film) {
    echo "Infos sur le film :==> ". "\n" . $film->getIdFilm() . " - " . $film->getNomFilm(). " - ". $film->getNbEntrees() . "\n";
}
