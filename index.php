<?php

include  "Film.php";

//Instancier un objet de type « Film » et afficher ses informations
$bacNord = new Film(1, "BAC Nord", 563921);
echo "Le film Bac Nord : ".$bacNord->getIdFilm() . " - " . $bacNord->getNomFilm(). " - ". $bacNord->getNbEntrees() . "\n";

//Modifier le nombre d’entrées du film et afficher ses informations
$bacNord->setNbEntrees(657450);
echo "Le film Bac Nord : ".$bacNord->getIdFilm() . " - " . $bacNord->getNomFilm(). " - ". $bacNord->getNbEntrees();

//Instancier d’autres objets de type « Film »