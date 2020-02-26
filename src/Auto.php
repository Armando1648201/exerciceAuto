<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
- Compléter les méthodes suivantes
- Toutes les méthodes sont statiques
- Conseils :
	- Commencer par créer toutes les méthodes vides avec les bons paramètres et la bonne valeur de retour
	- Faire chaque méthode en oubliant le contexte dans lequel elles seront utilisées. "Elles prennent des données et retournent une valeur. Point final!"
	- Tester CHAQUE méthode individuellement en ajoutant une ligne de test dans la page test.php
*/
class Auto {
	/** Méthode "titre" qui retourne le titre d'une voiture dont la marque et le modele sont passés en paramètres.
	 * Le résultat peut être envelopée ou non d'une balise dont le nom est passé en paramètre.
	 * Notes:
	 * - Il n'y a pas de validation de la combinaison. On pourrait donc avoir une "Ferrari Focus"
	 * - Si une $balise est fournie, on retourne le titre sous le modele suivant "<p>Ferrari Focus</p>"
	 *   en utilisant le nom de la balise donnée en paramètre
	 * - Si une $balise n'est pas fournie, on retourne le titre seulement. ex.: "Ferrari Focus"
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture Valeur par défaut : ""
	 * @param string $balise - Le nom de la balise devant envelopper le titre. 
	 * @return string - Le titre mis en forme
	*/
	static public function titre($nomMarque, $nomModele="", $balise="") {
		$resultat = '';
		$resultat = $nomMarque;
		if ($nomModele != "") {
			$resultat = $nomMarque." ".$nomModele;
		}
		if ($balise != "") {
			$resultat = '<'.$balise.'>'.$resultat.'</'.$balise.'>';
		}
		return $resultat;
	}

	/** Méthode "trouverModele" qui retourne le array représentant un modele de voiture.
	 * En fonction de la marque et du modele envoyé en paramètres.
	 * Si la marque n'existe pas ou le modele n'existe pas pour cette marque, on retourne false
	 * @param array $autos - Le array contenant les autos
	 * @param string $nomMarque - La marque à rechercher
	 * @param string $nomModele - Le modele à rechercher dans la marque
	 * @return array - Le array du modele ou false
	 */
	static public function trouverModele($autos, $nomMarque, $nomModele)
	{
		$resultat = '';
		if(!isset($autos[$nomMarque])) {
			return false;
		}
		if(!isset($autos[$nomModele])) {
			return false;
		}
		$resultat = $autos[$nomMarque][$nomModele];
		return $resultat;
	}


	/** Méthode "ariane" qui retourne le HTML du fil d'Ariane se trouvant DANS le div "menu"
	 * Notes :
	 * - Si une $nomMarque est fournie, on retourne le titre de la voiture et un lien vers index (voir la maquette)
	 * - Si une $nomMarque n'est pas fournie, on ne retourne que le mot "Accueil" (voir la maquette)
	 * @param string $nomMarque - La marque de voiture. Valeur par défaut : "".
	 * @param string $nomModele - Le modele de voiture. Valeur par défaut : "".
	 * @return string - Le HTML du fil d'Ariane
	 */
	static public function ariane($nomMarque="", $nomModele="")
	{
		$resultat = '';
		$resultat .= '<nav id="ariane">';
		$resultat .= '<ul>';

		if($nomMarque){
			$resultat .= '<li><a href="index.php">Accueil</a></li>';
		}else{
			$resultat .= '<li><span>Accueil</span></li>';
		}

		if($nomModele != ""){
			$resultat .= '<li><a href="marque.php">'.$nomMarque.'</a></li>';
			$resultat .= '<li><span>'.$nomModele.'</span></li>';
			
		}else{
			$resultat .= '<li><span>'.$nomMarque.'</span></li>';
		}

		
		$resultat .= '</ul>';
		$resultat .= '</nav>';
		return $resultat;
	}
	
	 
	/** Méthode "lien" qui retourne le code HTML d'un lien retrouvé dans la page index
	 * qui permet d'afficher les détails d'une voiture
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture
	 * @return string - Le HTML dw la balise <a>
	 */
	static public function lien($nomMarque, $nomModele)
	{
		$resultat = '';
		$resultat .= '<a href="modele.php?nomMarque='.$nomMarque.'&amp;nomModele='.$nomModele.'"></a>';
		return $resultat;
	}

	/** Méthode "image" qui retourne le code HTML d'une image composé en fonction des paramètres
	 * et en suivant le modèle suivant : <img src="images/voitures/ford_fiesta.jpg" class="voiture" alt="Ford Fiesta" title="Ford Fiesta" />
	 * Note : Cette méthode utilise la méthode "titre"
	 * Note : Le nom du fichier est en minuscule. Vous n'avez pas à vérifier la
	 * validité de la combinaison modele/marque ni l'existence du fichier
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture
	 * @param string $class - La classe à donner à la balise. Valeur par défaut: "voiture". Note: Si la classe est différente de "voiture", le nom de l'image doit automatiquement être accompagné du suffixe "_tb"
	 * @return string - Le HTML de la balise <img>
	 */
	static public function image($nomMarque, $nomModele, $class = 'voiture')
	{
		$resultat = '';
		if($class == "voiture"){
			$resultat = '<img src="images/voitures/'.$nomMarque.'_'.$nomModele.'.jpg" class="'.$class.'" alt="'.Auto::titre($nomMarque, $nomModele,"") .'" title="'.Auto::titre($nomMarque, $nomModele,"") .'" />';
		}else{
			$resultat = '<img src="images/voitures/'.$nomMarque.'_'.$nomModele.'_tb.jpg" class="'.$class.'" alt="'.Auto::titre($nomMarque, $nomModele,"") .'" title="'.Auto::titre($nomMarque, $nomModele,"") .'" />';
		}
		return $resultat;
		
	}

	/** Méthode "listeMarques" qui retourne le HTML du ul "listeMarques"
	 * contenant la liste des voitures (voir maquette, page index.php) en fonction du paramètre
	 * @param array $autos - Le array contenant les autos
	 * @return string - Le HTML du div "listeMarques"
	 */
	static public function listeMarques($autos)
	{	
		

		$resultat = '';
		$resultat .= '<ul class="listeMarques">';
		foreach($autos as $nameMarque => $infoMarque)
		{
		$resultat .= self::listeModeles($nameMarque, $infoMarque);
		}
		$resultat .= '</ul>';
		return $resultat;
	}

	 /** Méthode "listeModeles" qui retourne le HTML du ul "listeModeles"
	 * contenant la liste des voitures (voir maquette, page index.php) en fonction des paramètres
	 * @param array $nomMarque - Le nom de la marque à parcourir
	 * @param array $autosMarque - Le array contenant les autos
	 * @return string - Le HTML du ul "listeModeles"
	 */
	static public function listeModeles($nomMarque, $autosMarque)
	{
	
		$resultat = '';
		$resultat .= '<ul class="listeModeles">';
		foreach($autosMarque as $idMarque => $infoMarque)
		{
		$resultat .= '<li>'.self::lien($nomMarque, $idMarque);
		$resultat .= self::image($nomMarque, $idMarque, 'voiture');
		$resultat .= '</li>';
		}
		$resultat .= '</ul>';


		return $resultat;
	}

	/**	Méthode "ligne" qui retourne une ligne (<tr>) du tableau des caractéristiques
	 * en fonction des paramètres (voir maquette, page modele.php)
	 * @param string $etiquette - Le contenu de la première cellule
	 * @param string $contenu - Le contenu de la deuxième cellule
	 * @param string - Le HTML du tr
	 */
	static public function ligne($etiquette, $contenu)
	{
		$resultat = '';
		$resultat .= '<tr>';
		$resultat .= '<td class="etiquette">'.$etiquette.' : </td>';
		$resultat .= '<td>'.$contenu.'</td>';
		$resultat .= '</tr>';
		return $resultat;
	}

	/** Méthode "ligne_puissance" qui retourne la ligne de la puissance (2e ligne) de la voiture
	 * en lui donnant le format adéquat (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture (un modèle)
	 * @param string - Le HTML du tr
	 */
	static public function ligne_puissance($voiture)
	{
		$resultat = '';
		$contenu = explode(':',$voiture["puissance"]);
		$resultat .= self::ligne("puissance", $contenu[0]. "ch @" .$contenu[1]. "tr/min");
		return $resultat;
	}

	/** Méthode "ligne_couple" qui retourne la ligne du couple de la voiture (3e ligne)
	 * en lui donnant le format adéquat (Note : Utilise la méthode "ligne")
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture (un modèle)
	 * @param string - Le HTML du tr
	 */
	static public function ligne_couple($voiture)
	{
		$resultat = '';

		$contenu = explode(':',$voiture["couple"]);
		$resultat .= self::ligne("couple", $contenu[0]. "lb-pi @" .$contenu[1]. "tr/min");

		return $resultat;
	}

	/** Méthode "ligne_transmissions" qui retourne la ligne des transmissions disponibles (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture
	 * @return string - Le HTML du tr
	 */
	static public function ligne_transmissions($voiture)
	{
		$resultat = '';
		$resultat .= '<ul>';
		foreach($voiture['transmissions'] as $value)
		{
		$resultat .= '<li>';
		$resultat .= $value;
		$resultat .= '</li>';
		}
		$resultat .= '</ul>';
		return self::ligne('transmissions', $resultat);
	}

	/** Méthode "ligne_consommation" qui retourne la ligne de la consommation (en ville et sur autoroute) de la voiture (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture
	 * @return string - Le HTML du tr
	 */
	static public function ligne_consommation($voiture)
	{
		$resultat = '';

		$resultat = '';
		$resultat .= '<ul>';
		foreach($voiture['consommation'] as $value)
		{
		$resultat .= '<li>';
		$resultat .= $value;
		$resultat .= '</li>';
		}
		$resultat .= '</ul>';
		return self::ligne('consomation', $resultat);

		return $resultat;
	}

	/** Méthode "affichageVoiture" qui retourne le div "voiture" contenant la description d'une voiture
	 * en fonction des paramètres (voir maquette, page modele.php)
	 * Note : Cette méthode utilise des méthodes créées précédemment
	 * @param array $voiture - Le array représentant la voiture
	 * @param string $nomMarque - La marque à rechercher
	 * @param string $nomModele - Le modele à rechercher dans la marque
	 * @param string - Le HTML du div "voiture"
	 */
	static public function affichageVoiture($voiture, $nomMarque, $nomModele)
	{
		$resultat = '';


// <div class="voiture">
// self::image($nomMarque, $idMarque, 'voiture');
// <h2>Prix de base</h2>
// <div class="prix">192000 $</div>
// <h2>Caractéristiques</h2>
// <table class="caracteristiques">
// <tr>
// <td class="etiquette">Moteur : </td>
// <td>V8 4,3 litres</td>
// </tr>
// <tr>
// <td class="etiquette">Puissance : </td>
// <td>460 ch @ 7750 tr/min</td>
// </tr>
// <tr>
// <td class="etiquette">Couple : </td>
// <td>358 lb-pi @ 5000 tr/min</td>
// </tr>
// <tr>
// <td class="etiquette">Transmissions : </td>
// <td>
// <ul class="transmissions">
// <li>Séquentielle</li>
// <li>Manuelle, 6 rapports</li>
// </ul>
// </td>
// </tr>
// <tr>
// <td class="etiquette">Consommation : </td>
// <td>
// <ul class="consommation">
// <li>Ville : 16.9 litres/100 km</li>
// <li>Autoroute : 10.6 litres/100 km</li>
// </ul>
// </td>
// </tr>
// </table>
// </div>


		return $resultat;
	}	

}