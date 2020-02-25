<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page devrait contenir les tests des méthodes
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.php
=========================================================================
*/
include_once("../src/donnees.inc.php");
include_once("../src/Auto.php");
/*LIGNE DE TEST*/
// echo Auto::titre('Ford', 'Fiesta', 'strong');
// echo Auto::titre('Ford', 'Fiesta', 'h1');
// var_dump(Auto::trouverModele($voitures, 'Lada', 'California'));
// var_dump(Auto::trouverModele($voitures, 'Ford', 'California'));
// var_dump(Auto::trouverModele($voitures, 'Ford', 'Fiesta'));
// var_dump(Auto::ariane());
// var_dump(Auto::ariane('Ford'));
// var_dump(Auto::ariane('Ford', 'Fiesta'));
var_dump(Auto::lien());
var_dump(Auto::lien('Fiesta'));
var_dump(Auto::lien('Ford'));
var_dump(Auto::lien('Ford', 'Fiesta'));

// ... CONTINUER ...
