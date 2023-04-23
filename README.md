# Stroke-Finance

# Architecture ![icons8-restauration-de-base-de-données-30](https://user-images.githubusercontent.com/118398845/214827690-29f8d27a-0924-41a1-b497-621daf362856.png)


Ce Github est un projet d'architecture Base de donnée.Dans ce projet nous allons travailler avec le site de la centrale afin de prendre les données des véhicule (Modele , prix ,année , région) en coorélation avec leur cotation bourssière . 

Nous avons utilisé la centrale afin de récolter les données de ventes de véhicule d'occasion. Pour pouvoir récolter ces donnée nous nous sommes aidé de [Web Scrapper], puis nous avons fais un script en python .

* *Ce Read me a été réalisé sous windows 10 mais est identique pour Windows 11 , Linux et Mac.* 

# Prérequis 
Tout d'abord dans ce prérequis nous allons installer tout les éléments necessaires pour pouvoir executer notre projet .Lors du dévellopement de ce Projet nous avons utiliser Visual studio code . 

## Installations ![icons8-ampoule-globe-48](https://user-images.githubusercontent.com/118398845/214812403-1cdb1c93-4937-4550-89cd-e32e7aee91eb.png)


Sur ce projet , il faut installer : 

- [Installer MongoDB](https://www.mongodb.com/try/download/community)
- [Installer MongoSH](https://www.mongodb.com/try/download/shell)
- [Installer Python](https://www.python.org/downloads/)
- [Installer Pandas](https://pandas.pydata.org/pandas-docs/stable/getting_started/install.html)
- [Installer Xamp](https://www.apachefriends.org/fr/download.html). Il faut installer la version 8.1 car c'est la dernière version qui est compatible avec Mongo.

  **En ligne de commande**
  
   - __Installer les librairie qu'on a besoin__
   
   ``````
   pip install -r requirements.txt
   
   ``````
 

## Lancement MongoDB et MongoSH !

Pour executer notre projet il faut tout d'abord lancer MongoSH  et MongoDB Compass

### - Mongo SH

Pour lancer MongoSh il faut lancer le .exe 

![image](https://user-images.githubusercontent.com/118398845/212062370-fc86b674-6c3c-454d-a825-e346e715d4c4.png)

Une MongoSh lancer vous allez être diriger vers cette page :

![image](https://user-images.githubusercontent.com/118398845/214807947-221f3776-7479-41f0-8745-55eaa78b27f9.png)

Il faut appuyer sur la touche "__ENTRER__"![icons8-touche-entrée-48](https://user-images.githubusercontent.com/118398845/214808187-4534a048-76f7-4940-aeb6-00c5c5ca07f6.png)


### - Mongo DB Compass

Pour lancer MongoDBCompass il suffit de lancer l'application .

![image](https://user-images.githubusercontent.com/118398845/212063294-919a8d34-7a2b-4203-b712-5ee4a5104ec0.png)

- Une fois l'application lancer vous allez créer une DATABASE il faut cliquer sur "__+__"

![image](https://user-images.githubusercontent.com/118398845/214810829-8a6e00ea-461a-44f7-8323-cbaa74524942.png)

- Puis choisissez le nom de votre DATA BASE



## VisualStudio

L'environnement que nous utilisons est VisualStudio Code  


- [Installer VisualStudio](https://code.visualstudio.com/download)

- Faire un open folder du dossier du site
- Faire un open folder du dossier de la base de données


# Lancement du Projet  ![icons8-racing-car-48](https://user-images.githubusercontent.com/118398845/214806718-ba2df5ba-7db1-43f1-b2ee-69bc30ba779d.png)

Une fois toute les installations et configurations effecteur nous allons executer le projet : 

## Insertion des donnée dans la Base

 - Ouvrez tout d'abord les fichiers **prog_insert_bourse.py** , **prog_insert_voiture.py** ,**prog_insertScrap_Mongo.py** puis inserrez votre connexion correpondante qui se trouve dans votre Mongosh (_dans notre exemple nous allons utilisé la connexion du groupe_):
![image](https://user-images.githubusercontent.com/118398845/214821948-01842b1f-5ea9-47f3-97df-b0553b917c20.png).

 - Ensuite vous pouvez executer **prog_Agregate_collection.py**

 - Puis vous allez remplacer par votre connexion a cette endroit du script: 
 
 ![image](https://user-images.githubusercontent.com/118398845/214965007-c64deb44-a73c-4470-8b15-5d239b12386a.png)

 
- Puis une fois le script executer vous pouvez aller sur Mongocompass et faire un "__Reload DATA__" afin de raffraichir la Data Base et voir si les données ont bien été insérer dans la Base: ![image](https://user-images.githubusercontent.com/118398845/214893686-217c8788-a47b-4a87-a294-b11924657b20.png)




