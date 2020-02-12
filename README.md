# Projet 1 : AUTOGUIDE 2020
## Les fichiers

	📁components	(Des sections de page)
		📄footer.php
		📄header.php
	📁grille	(La grille de correction)
	📁public
		📁css
		📁images
			📁voitures	(Les images des voitures)
			📄fond.png
		📄index.php	(La liste des marques)
		📄modele.php	(La liste des modèles)
		📄marque.php	(Les détails d'une voiture)
		📄tests.php	(Pour tester les méthodes)
	📁src
		📄Auto.php	(LA CLASSE)
		📄donnees.inc.php	(Les données à utiliser)
	📄index.php	(Ne pas toucher)
	📄README.md	(Ici)

## La classe Auto

- Compléter les méthodes de la classe `Auto`
- Toutes les méthodes sont statiques
- Conseils :
	- Commencer par créer toutes les méthodes vides avec les bons paramètres et la bonne valeur de retour
	- Faire chaque méthode en oubliant le contexte dans lequel elles seront utilisées. _"Elles prennent des données et retournent une valeur. Point final!"_
	- Tester __CHAQUE__ méthode individuellement en ajoutant une ligne de test dans la page `test.php`.

## Méthodes
1. Méthode statique `titre`
	- Retourne le titre d'une voiture dont la marque et le modele sont passés en paramètres.
	- Le résultat peut être envelopée ou non d'une balise dont le nom est passé en paramètre.
	- Notes:
		- Il n'y a pas de validation de la combinaison. On pourrait donc avoir une `"Ferrari Focus"`.
		- Si une `$balise` est fournie, on retourne le titre sous le modele suivant `"<p>Ferrari Focus</p>"` en utilisant le nom de la balise donné en paramètre.
		- Si une `$balise` n'est pas fournie, on retourne le titre seulement. ex.: `"Ferrari Focus"`
	- Paramètres
		- `$nomMarque` : _string_ &mdash; La marque de voiture
		- `$nomModele` : _string_ &mdash; Le modele de voiture
		- `$balise` : _string_ &mdash; Le nom de la balise devant envelopper le titre. Valeur par défaut : `""`
	- Valeur de retour : _string_ &mdash; Le titre mis en forme.

1. Méthode statique `trouverModele`
	- Retourne le `array` représentant un modele de voiture. En fonction de la marque et du modele envoyé en paramètres. 
	- Note: Si la marque n'existe pas ou le modele n'existe pas pour cette marque, on retourne `false`
	- Paramètres
		- `$autos` : _array_ &mdash; Le `array` contenant les autos
		- `$nomMarque` : _string_ &mdash; La marque à rechercher
		- `$nomModele` : _string_ &mdash; Le modele à rechercher dans la marque
	- Valeur de retour : _array_ &mdash; Le `array` du modele ou `false`


1. Méthode statique `ariane`
	- Retourne le HTML du fil d'Ariane se trouvant _dans_ le div `"menu"`
	- Notes :
		- Si `$nomMarque` est fourni, on retourne le titre de la voiture et un lien vers index (voir la maquette)
		- Si `$nomMarque` n'est pas fourni, on ne retourne que le mot "Accueil" (voir la maquette)
	- Paramètres
		- `$nomMarque` : _string_ &mdash; La marque de voiture. Valeur par défaut : `""`.
		- `$nomModele` : _string_ &mdash; Le modele de voiture. Valeur par défaut : `""`.
	- Valeur de retour : _string_ &mdash; Le HTML du fil d'Ariane

1. Méthode statique `lien`
	- Retourne le code HTML d'un lien retrouvé dans la page `index` 
	- Ce lien permet d'afficher les détails d'une voiture.
	- Paramètres
		- `$nomMarque` : _string_ &mdash; La marque de voiture
		- `$nomModele` : _string_ &mdash; Le modele de voiture
	- Valeur de retour : _string_ &mdash; Le HTML de la balise `<a>`
	 
1. Méthode statique `image`
	- Retourne le code HTML d'une image composé en fonction des paramètres et en suivant le modèle suivant : `<img src="images/ford_fiesta.jpg" class="voiture" alt="Ford Fiesta" title="Ford Fiesta" />`
	- Notes
		- Cette méthode utilise la méthode "titre"
		- Le nom du fichier est en minuscule. Vous n'avez pas à vérifier la validité de la combinaison modele/marque ni l'existence du fichier.
	- Paramètres
		- `$nomMarque` : _string_ &mdash; La marque de voiture
		- `$nomModele` : _string_ &mdash; Le modele de voiture
		- `$class` : _string_ &mdash; La classe à donner à la balise. Valeur par défaut: "voiture". Note: Si la classe est différente de "voiture", le nom de l'image doit automatiquement être accompagné du suffixe `"_tb"`.
	- Valeur de retour : _string_ &mdash; Le HTML de la balise `<img>`
	
1. Méthode statique `listeMarques`
	 qui retourne le HTML du ul "listeMarques"
	- contenant la liste des voitures (voir maquette, page index.php) en fonction du paramètre
	- Paramètres
	 $autos : _array_ &mdash; Le `array` contenant les autos
	- Valeur de retour : _string_ &mdash; Le HTML du div "listeMarques"
	 */
1. Méthode statique `listeModeles`
	 qui retourne le HTML du ul "listeModeles"
	- contenant la liste des voitures (voir maquette, page index.php) en fonction des paramètres
	- Paramètres
	 $nomMarque : _array_ &mdash; Le nom de la marque à parcourir
	 $autosMarque : _array_ &mdash; Le `array` contenant les autos
	- Valeur de retour : _string_ &mdash; Le HTML du ul "listeModeles"
	 */
1. Méthode statique "ligne" qui retourne une ligne (`<tr>`) du tableau des caractéristiques
	- en fonction des paramètres (voir maquette, page modele.php)
	- Paramètres
	 $etiquette : _string_ &mdash; Le contenu de la première cellule
	 $contenu : _string_ &mdash; Le contenu de la deuxième cellule
	  &mdash; : _string_ Le HTML du tr
	 */
1. Méthode statique `ligne_puissance`
	 qui retourne la ligne de la puissance (2e ligne) de la voiture
	- en lui donnant le format adéquat (voir maquette, page modele.php)
	- Note : Cette méthode utilise la méthode "ligne"
	- Paramètres
	 $voiture : _array_ &mdash; Le `array` représentant la voiture (un modèle)
	  &mdash; : _string_ Le HTML du tr
	 */

1. Méthode statique `ligne_couple`
	 qui retourne la ligne du couple de la voiture (3e ligne)
	- en lui donnant le format adéquat (Note : Utilise la méthode "ligne")
	- Note : Cette méthode utilise la méthode "ligne"
	- Paramètres
	 $voiture : _array_ &mdash; Le `array` représentant la voiture (un modèle)
	  &mdash; : _string_ Le HTML du tr
	 */

1. Méthode statique `ligne_transmissions`
	 qui retourne la ligne des transmissions disponibles (voir maquette, page modele.php)
	- Note : Cette méthode utilise la méthode "ligne"
	- Paramètres
	 $voiture : _array_ &mdash; Le `array` représentant la voiture
	- Valeur de retour : _string_ &mdash; Le HTML du tr
	 */

1. Méthode statique `ligne_consommation`
	 qui retourne la ligne de la consommation (en ville et sur autoroute) de la voiture (voir maquette, page modele.php)
	- Note : Cette méthode utilise la méthode "ligne"
	- Paramètres
	 $voiture : _array_ &mdash; Le `array` représentant la voiture
	- Valeur de retour : _string_ &mdash; Le HTML du tr
	 */

1. Méthode statique `affichageVoiture`
	 qui retourne le div "voiture" contenant la description d'une voiture
	- en fonction des paramètres (voir maquette, page modele.php)
	- Note : Cette méthode utilise des méthodes créées précédemment
	- Paramètres
	 $voiture _array_ &mdash; Le `array` représentant la voiture
	 $nomMarque : _string_ &mdash; La marque à rechercher
	 $nomModele : _string_ &mdash; Le modele à rechercher dans la marque
	  &mdash; : _string_ Le HTML du div "voiture"
	 */
## La page de tests

```php
/*LIGNE DE TEST*/
echo Auto::titre('Ford', 'Fiesta', 'strong');
```
