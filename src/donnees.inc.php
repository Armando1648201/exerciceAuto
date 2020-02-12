<?php
/* Ce fichier est complet. Vous ne devez pas le modifier, mais vous devez l'inclure dans vos pages. */

/*
$voitures est un array associatif qui contient chaque marque de voiture ("Ford", "Nissan", "Ferrari", etc.). La clé est le nom de la marque.
Chaque marque est constituée d'un autre array associatif qui contient chaque modèle de voiture associée à cette marque ("Focus", "Fiesta", "Fusion", etc.). La clé est le nom du modèle.
Chaque modèle est lui-même un array associatif contenant les éléments (clés) suivants :
	prix : Le prix de la voiture,
	moteur: Le type de moteur,
	puissance : Une description de la puissance du moteur (2 données séparées par un deux-point),
	couple : Une description du couple du moteur (2 données séparées par un deux-point),
	transmissions : Un array séquentiel des transmissions offertes avec le modèle,
	consommation : Un array associatif de la consommation en ville et sur l'autoroute,
	description : Un paragraphe descriptif,
*/
$voitures = array(
	'Ford'=>array(
		'Fiesta'=>array(
			'prix'=>14349,
			'moteur'=>'4L 1,6 litre',
			'puissance'=>'120:6000',
			'couple'=>'112:4250',
			'transmissions'=>array('Manuelle, 5 rapports', 'Automatique, 6 rapports'),
			'consommation'=>array('ville'=>7.9, 'autoroute'=>4.7),
			'description'=>'Elle n’est même pas encore offerte chez les concessionnaires que déjà la petite Fiesta ne laisse personne indifférent. Pour l’instant, nous n’avons pu essayer que la version munie du quatre cylindres de 1,6 litre de 125 chevaux qui assure des performances honorables à la future sous-compacte. Si les lignes extérieures sont résolument modernes, que dire du tableau de bord au design éclaté tout en étant convivial ! Un hatchback et une berline seront commercialisés durant l’année 2010.',
		),
		'Focus'=>array(
			'prix'=>15499,
			'moteur'=>'4L 2.0l',
			'puissance'=>'140:6000',
			'couple'=>'136:4250',
			'transmissions'=>array('Manuelle, 5 rapports','Automatique, 4 rapports'),
			'consommation'=>array('ville'=>8.5, 'autoroute'=>5.6),
			'description'=>'L\'actuelle génération des populaires Ford Focus vous sera vendue à prix de « débarras », et ce, dans le bon sens du terme pour vous. Présentement, seules les versions berline et coupé sont offertes par les concessionnaires de la marque. La prochaine Focus reprend les lignes de la petite Fiesta. La finition, le confort et surtout la présentation de la nouvelle venue passent nettement à un stade supérieur. Son moteur quatre cylindres de 2,0 litres Ti-VCT est accouplé à une boîte automatique à six rapports.',
		),
		'Fusion'=>array(
			'prix'=>21449,
			'moteur'=>'4L 2,5 litres',
			'puissance'=>'175:6000',
			'couple'=>'172:4250',
			'transmissions'=>array('Manuelle, 6 rapports','Automatique, 6 rapports'),
			'consommation'=>array('ville'=>9,5, 'autoroute'=>6,3),
			'description'=>'La renaissance de la société Ford n’aurait pu se matérialiser sans l’apport de son modèle Fusion qui a su rivaliser avec force et ténacité aux ténors de sa niche que sont les Toyota Camry et Honda Accord. Son habitacle très généreux sait gâter ses cinq occupants. Il y en a pour tous les goûts et surtout tous les budgets. La palette de moteurs comprend deux quatre et deux six cylindres que l’on pourrait considérer comme complémentaires, dont une version hybride des plus intéressantes.',
		),
	),
	'Nissan'=>array(
		'Versa'=>array(
			'prix'=>12698,
			'moteur'=>'4L 1,6 litre',
			'puissance'=>'107:6000',
			'couple'=>'111:4600',
			'transmissions'=>array('Manuelle, 5 rapports','Automatique, 4 rapports'),
			'consommation'=>array('ville'=>7.7, 'autoroute'=>5.8),
			'description'=>'La Versa est offerte en deux versions, berline et hatchback, la deuxième livrée étant nettement la plus populaire. Comme c\'est le cas pour la plupart des véhicules de Nissan, la Versa donne le choix d\'une transmission manuelle à 6 rapports, d’une automatique à 4 rapports ou d\'une CVT. Deux motorisations sont possibles. Pour la berline, il s’agit d’un 4 cylindres de 1,6 litre alors que la version hatchback hérite du 4 cylindres de 1,8 litre.',
		),
		'Altima'=>array(
			'prix'=>23998,
			'moteur'=>'4L 2,5 litres',
			'puissance'=>'175:5600',
			'couple'=>'180:3900',
			'transmissions'=>array('Manuelle, 6 rapports','CVT'),
			'consommation'=>array('ville'=>8.8, 'autoroute'=>6.2),
			'description'=>'Dans la catégorie des berlines intermédiaires, l\'Altima a su se démarquer grâce à un design fluide et sportif. Quelques modifications au fil du temps lui ont permis de suivre la parade. La version hybride est toujours au catalogue, de même que la livrée coupé qui affiche un style épuré. Plusieurs versions sont offertes. En entrée de gamme, on retrouve un 4 cylindres alors que les versions plus onéreuses disposent d\'un puissant V6.',
		),
	),
	'Ferrari'=>array(
		'California'=>array(
			'prix'=>192000,
			'moteur'=>'V8 4,3 litres',
			'puissance'=>'460:7750',
			'couple'=>'358:5000',
			'transmissions'=>array('Séquentielle','Manuelle, 6 rapports'),
			'consommation'=>array('ville'=>16.9, 'autoroute'=>10.6),
			'description'=>'La célèbre marque italienne a craqué elle aussi pour la commercialisation d’un coupé-cabriolet ou si vous préférez une décapotable à toit rigide rétractable. Depuis l’an dernier, la California est devenue une Ferrari à part entière. Elle est animée par un moteur V8 de 4,3 litres à injection directe, placé à l’avant, qui pour les besoins délivre 460 chevaux et 358 lb-pi de couple. Son habitacle des plus somptueux peut accueillir jusqu’à quatre passagers.',
		),
	),
);
