# Weathertest

Cette application permet de récupérer l'identifiant, le nom et la température actuelle d'une ville de votre choix.

Afin de faire fonctionner l'application : 

 - Créez un dossier config
 - Dans le dossier config, créez le fichier config.json


 
Le fichier config.json est de la forme : 

{
    "key": {
        "value": "XXX"
    },
    "city": {
        "name": "YYY",
		"mode": "ZZZ",
		"codelangue": "AAA"
    }
}



Il faut ensuite modifier les différentes valeurs avec celles désirées : 
			XXX : clé API openweathermap
			YYY : nom de la ville (possibilité de tester le nom de votre ville : https://openweathermap.org/find)
			ZZZ : mode (standard, metric, imperial)
			AAA : code langue (langues compatibles : https://openweathermap.org/current#multi)
			
			

L'application se situe dans /test/app.php