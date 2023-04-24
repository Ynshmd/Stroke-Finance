from flask import Flask, render_template, request, jsonify
from pymongo import MongoClient

app = Flask(__name__)

# Configurez la connexion à MongoDB
client = MongoClient("mongodb://127.0.0.1:27017/mongo?directConnection=true&serverSelectionTimeoutMS=2000&appName=mongosh+1.6.1")
db = client["Projet_Ydays"]

@app.route("/")
def index():
    # Récupérez les données dont vous avez besoin depuis MongoDB
    data = db["caract_voiture"].find()

    # Renvoyez le fichier index.html avec les données à afficher
    return render_template("wassil.html", data=data)

@app.route('/data')
def data ():
     collection = db["caract_voiture"]
     documents = collection.find()

    # Renvoyer les données à la page HTML
     return render_template('data.html', documents=documents)

@app.route('/search', methods=['GET'])
def search():
    # Récupération des données du formulaire
    marque = request.args.get('Marque')
    modele = request.args.get('MODELE')
    motorisation = request.args.get('MOTEUR')
    carburant = request.args.get('CARBURANT')
    kilometrage = request.args.get('KILOMETRAGE')
    annee = request.args.get('ANNEE')
    prix = request.args.get('PRIX')

    # Création du filtre en fonction des données du formulaire
    filter = {}

    if marque:
        filter['Marque'] = marque
    if modele:
        filter['MODELE'] = modele
    if motorisation:
        filter['MOTEUR'] = motorisation
    if carburant:
        filter['CARBURANT'] = carburant
    if kilometrage:
        filter['KILOMETRAGE'] = {'$lte': int(kilometrage)}
    if annee:
        filter['ANNEE'] = int(annee)
    if prix:
        filter['PRIX'] = {'$lte': int(prix)}

    # Récupération des données de la base MongoDB en fonction du filtre
    collection = db["all_caract_voiture"]
    results = collection.find(filter)
    
    # Renvoyer les résultats filtrés à la page HTML
    return render_template('result_search.php', results=results )

# @app.route('/contact', methods=['GET', 'POST'])
# def message():
#     if request.method == 'POST':
#         message = {
#             'Name': request.form['Name'],
#             'Email': request.form['Email'],
#             'Message': request.form['Message']
#         }
#         collection = db["contact"]
#         collection.insert_one(message)
#         return render_template('wassil.html')
#     return render_template('wassil.html')

# @app.route('/contact', methods=['GET', 'POST'])
# def message():

#     if request.method == 'POST' in request.form:

#         Name = request.form['Name']
#         Email = request.form['Email']
#         Message = request.form['Message']
#         if Name and Email and Message:
#             post_data = {'Name': Name, 'Email': Email, 'Message': Message}
#             collection = db["contact"]
#             collection.insert_one(post_data)
#             return "<div class='alert alert-success'> Message envoye </div>"

#         else:

#          return "<div class='alert alert-danger'> Required fields empty! </div>"

#     return render_template('wassil.html')
@app.route('/envoyer_message', methods=['POST'])
def envoyer_message():
    if request.method == 'POST':
        name = request.form['Name']
        email = request.form['Email']
        message = request.form['Message']
        db.contact.insert_one({'Name': name, 'Email': email, 'Message': message})
        return 'Message envoyé avec succès !'
    else:
        return 'Méthode HTTP non autorisée'

if __name__ == "__main__":
    app.run(debug=True)
