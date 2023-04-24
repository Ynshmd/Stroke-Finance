from pymongo import MongoClient
import pandas as pd
import csv 
from dateutil import parser
import json 


# Connexion à la base de données MongoDB
client = MongoClient("mongodb://localhost:27017/")
db = client["Projet_Ydays"]

# Construction de la pipeline d'agrégation
result=db["caract_voiture"].aggregate(pipeline = [
    {"$lookup":
        {
            "from": "caract_moteur",
            "localField": "MOTEUR",
            "foreignField": "Moteur centrale",
            "as": "Moteur"
        }
    }
]);



new_collection = db["Temp_Voitures"]
new_collection.insert_many(result)

 
result=db["Temp_Voitures"].aggregate(pipeline = [
    {"$lookup":
        {
            "from": "caract_notation_voiture",
            "localField": "MODELE",
            "foreignField": "Modele",
            "as": "Notation"
        }
    }
]);



new_collection = db["Final_Voitures"]
new_collection.insert_many(result)


# Fermeture de la connexion
client.close()
print("Les données ont bien été ajoutées !")
