# Stroke-Finance

# Introduction ![icons8-restauration-de-base-de-données-30](https://user-images.githubusercontent.com/118398845/214827690-29f8d27a-0924-41a1-b497-621daf362856.png)

Dans le cadre du module Ydays pour cette 1ère version, nous avons décidé de chosir un projet se nommant "Stroke Finance" qui est une application web qui serait utile pour toute personne qui souhaiterait obtenir des informations détailées sur son véhicule, d'acheter un véhicule par la même occasion ou vendre son véhicule. Toutes nos données seront stockées dans une base de données mongodb compass. Les informations détaillées sont des notes évaluées sur 5 sous forme de jauges selon les catégories : 

 - La note de consommation
 - La fiabilité
 - La durée de la garantie constructeur
 - Les performances
 - La côté attendue
 - L'habitabilité 
 
Les différentes étapes sont :
 - Scrapper les données de la centrale grâce à l'outil "Web Scrapper"
 - Générer un csv 
 - Adapter le csv à notre convenance
 - Chercher toutes les informations détaillées dans différents sites
 - Créer un csv avec toutes les informations récupérées 
 - Mettre dans le même csv les données scrappées et les informations détaillées
 - Ajouter le csv (scrape_centrale.csv) dans la base mongodb compass grâce à un programme python (prog_insert_scrap.py)
 - Créer un csv "Contact"(pour toutes personnes souhaitant nous contacter à partir de notre site) et l'ajouter (insert_msg.csv) dans la base mongodb compass grâce à un programme python (prog_insert_msgContact.py)
 - Création serveur Flask, liaison serveur flask + site web & conception du site web avec toutes les fonctionnalitées et un rendement esthétique
 - Rédaction Github
 - Remplissage Trello
 - Amélioration potentielle pour une 2ème version

* *Ce Read me a été réalisé sous windows 10 mais est identique pour Windows 11 , Linux et Mac.* 

# Prérequis 
Tout d'abord dans ce prérequis nous allons installer tout les éléments necessaires pour pouvoir executer notre projet. Lors du développement de ce projet nous avons utiliser Visual Studio Code, mongodb Compass, mongosh et un serveur flask pour notre application web.

## Installations ![icons8-ampoule-globe-48](https://user-images.githubusercontent.com/118398845/214812403-1cdb1c93-4937-4550-89cd-e32e7aee91eb.png)


Sur ce projet , il faut installer : 

- [Installer MongoDB](https://www.mongodb.com/try/download/community)
- [Installer MongoSH](https://www.mongodb.com/try/download/shell)
- [Installer Python](https://www.python.org/downloads/)
- [Installer Pandas](https://pandas.pydata.org/pandas-docs/stable/getting_started/install.html)

  **En ligne de commande**
  
   - __Installer les librairies qu'on a besoin__
   
   ``````
   pip install -r requirements.txt
   
   ``````
# Lancement du Projet  ![icons8-racing-car-48](https://user-images.githubusercontent.com/118398845/214806718-ba2df5ba-7db1-43f1-b2ee-69bc30ba779d.png)

Une fois toute les installations et configurations effectuées nous allons executer le projet : 

## VisualStudioCode

L'IDE que nous utilisons est VisualStudio Code.

- [Installer VisualStudio Code](https://code.visualstudio.com/download)

- Faire un open folder du dossier du site, /!\ attention à bien respecter l'architecture des dossiers et fichiers pour bien faire fonctionner le projet.
- Par exemple dans un dossier appelé dans notre cas "Ydays2", dans ce dossier il doit y avoir un dossier "site", dans le dossier "site", il doit y avoir un fichier "app.py" et un dossier appelé "templates". Dans le dossier "templates", il doit y avoir tous les fichiers pythons, html,php, csv. 
- Pour lancer le site, il suffira de lancer le fichier "app.py". Lors du run du fichier, veillez à être dans le bon chemin selon l'endroit ou vous avez stocké vos fichiers et dossiers ! 
- Récupérer le lien généré par "app.py" qui est " http://127.0.0.1:5000" et collé dans un navigateur (de préférence Chrome --> meilleur rendu esthétique)


## Lancement MongoDB et MongoSH !

Pour nous aperçevoir de l'état de nos données, il faut tout d'abord lancer MongoSH puis MongoDB Compass pour un aperçu plus visuel.

### - Mongo SH

Pour lancer MongoSh il faut lancer le .exe 

![image](https://user-images.githubusercontent.com/118398845/212062370-fc86b674-6c3c-454d-a825-e346e715d4c4.png)

Une fois MongoSh lancer vous allez être diriger vers cette page :

![image](https://user-images.githubusercontent.com/118398845/214807947-221f3776-7479-41f0-8745-55eaa78b27f9.png)

Appuyer sur la touche "__ENTRER__" ![icons8-touche-entrée-48](https://user-images.githubusercontent.com/118398845/214808187-4534a048-76f7-4940-aeb6-00c5c5ca07f6.png) pour faire venir la connexion string

- Faire un "show dbs" pour voir les bases de données qu'il y a dans notre base de données 
- Faire un "use Projet_Ydays" par exemple pour se connecter à cette base de données
- Faire un "show collections" pour voir les collections dans cette base de données
- Faire un "db.Contact.find({})" pour voir ce qu'il y a dans la collection "Contact"

## Insertion des données dans la Base Mongodb Compass

- Ouvrez tout d'abord les fichiers **prog_insert_scrap.py** , **prog_insert_msgContact.py** puis inserrez votre connexion correpondante qui se trouve dans votre Mongosh (_dans notre exemple nous allons utilisé la connexion du groupe_):
![image](https://user-images.githubusercontent.com/118398845/214821948-01842b1f-5ea9-47f3-97df-b0553b917c20.png).

- Puis vous allez remplacer par votre connexion a cette endroit du script: 
 
![image](https://user-images.githubusercontent.com/118398845/214965007-c64deb44-a73c-4470-8b15-5d239b12386a.png)

- Puis une fois le script executer vous pouvez aller sur Mongocompass et faire un "__Reload DATA__"  ![image](https://user-images.githubusercontent.com/118398845/214893686-217c8788-a47b-4a87-a294-b11924657b20.png) afin de raffraichir la base de données et voir si les données ont bien été insérées dans la base.

### - Mongo DB Compass

Pour lancer MongoDBCompass il suffit de lancer l'application .

![image](https://user-images.githubusercontent.com/118398845/212063294-919a8d34-7a2b-4203-b712-5ee4a5104ec0.png)

- Visualiser l'état des données dans la base "Projet_Ydays"
- Visualiser la collection "all_caract_voiture"
- Visualiser la collection "Contact"


## Site web

Notre site internet cible pour le moment des clients de la centrale où toutes personnes souhaitant obtenir des informations détaillées pour potentiellement vendre son véhicule ou acheter un véhicule. Grâce à une capacité de filtre dans "Recherchez votre véhicule" sur notre site, le client pourra mettre le plus d'informations possible selon ce qu'il connait pour chercher la voiture qu'il lui faut, ou s'il veut avoir des informations dessus qu'il mette les informations qu'il souhaite.
De plus, si un client souhaite nous contacter, il est tout à fait possible. Il suffit d'aller dans "Contact".

https://user-images.githubusercontent.com/118398845/234105328-53824579-5cf6-42e0-a4b1-abc6d734b477.mp4

### Recherche d'un vehicule et envoie d'un message



https://user-images.githubusercontent.com/118398845/234105285-23b9173f-edde-4a49-84d5-a889e55657e3.mp4



## Points blocants/Améliorations potentielles

Au début nous étions partis, sur un scrap que nous avons fait nous-mêmes pour scrappé les données de LaCentrale avec un programme python et un autre programme d'agreggate qui nous permettait de lier des collections mongodb entre-elles, ainsi pour obtenir des données en live grâce à un bouton qui serait sur notre site qui permettrait d'avoir des données en temps réels. 

Cependant, LaCentrale entre temps à améliorer son site web, et notre programme de scrap ne fonctionnait plus... étant donné que nous voulions pas perdre trop de temps la dessus, nous avons décidé de trouver une autre solution pour respecter la deadline, d'où l'utilisation de l'outil WebScrapper. Hélas, avec cet outil, nous avons des données brutes et non en live. Le scrap a été le plus gros point blocant en terme de temps pour ce projet. Nous avons eu des problèmes de ressources matérielles par rapport à la puissance de certaines machines, des problèmes de qualité des données lors du scrap il a donc fallut arranger tout cela pour que notre base de données soit qualitative.

En ce qui concerne les améliorations que nous souhaitons faire pour une deuxième version pour l'année prochaine, ça serait d'avoir des données en temps réels de plusieurs sources différentes, d'utiliser un programme d'agreggate entre les collections, d'effectuer une estimation du bien selon certains critères potentiellement avec un peu de IA si nous le pouvons.

