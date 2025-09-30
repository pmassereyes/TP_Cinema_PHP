<?php

include  "Film.php";
$bacNord = new Film(1, "BAC Nord", 563921);
echo "Le film Bac Nord : ".$bacNord->getIdFilm() . " - " . $bacNord->getNomFilm(). " - ". $bacNord->getNbEntrees();