<?php

include  "Film.php";
include  "Realisateur.php";
include  "Acteur.php";

//Instancier un objet de type « Film » et afficher ses informations
$act1Film1=new Acteur("Lellouche","Gilles",false);
$act2Film1=new Acteur("Civil","Francois",false);
$act3Film1=new Acteur("Leklou","Karim",true);

$act1Film2=new Acteur("Niney","Pierre",true);
$act2Film2=new Acteur("De Laâge","Lou",false);
$act3Film2=new Acteur("Dussolier","André",true);

$act1Film3=new Acteur("Pattinson","Robert",true);
$act2Film3=new Acteur("Kravitz","Zoë",false);
$act3Film3=new Acteur("Dano","Paul",false);

$filmF1 = new Film(1, "BAC Nord", 563921, new Realisateur("Jimenez","Cedric"),[$act1Film1,$act2Film1,$act3Film1]);

echo "Le film Bac Nord : ".$filmF1->getIdFilm() . " - " . $filmF1->getNomFilm(). " - ". $filmF1->getNbEntrees() . "\n";

//Modifier le nombre d’entrées du film et afficher ses informations
$filmF1->setNbEntrees(657450);
echo "Modification du nombre d'entrées ==> " . "\n " . $filmF1->getIdFilm() . " - " . $filmF1->getNomFilm(). " - ". $filmF1->getNbEntrees() . "\n";

//Instancier d’autres objets de type « Film » dans un tableau et afficher les informations de chaque film

$films = [
    $filmF2 = new Film(2, "Boîte noire", 2003458, new Realisateur("Gozian","Yann"),[$act1Film2,$act2Film2,$act3Film2]),
    $filmF3 = new Film(3, "The Batman", 1523984, new Realisateur("Matt","Reeves"),[$act1Film3,$act2Film3,$act3Film3]),
];

foreach ($films as $film) {
    echo "Infos sur le film :==> ". "\n" .
     $film->getIdFilm() . " - " . $film->getNomFilm(). " - ". $film->getNbEntrees() . " - ". $film->getRealisateur()->getNomRealisateur() . " " .$film->getRealisateur()->getPrenomRealisateur() . "\n".
     " Liste des acteurs ==> " . "\n" ;
      foreach($film->getActeurs() as $acteur){
       echo $acteur->getNomActeur() . " - " . $acteur->getPrenomActeur() . " - " . ($acteur->getEstCesarise() ? 'true':'false') . "\n" ;
     }
     } 



