from flask import Flask, request, jsonify
import joblib
import pandas as pd
import unidecode
import numpy as np


app = Flask(__name__)

# Charger le modèle
pipeline = joblib.load('ai_prediction/model/xgboost_model.pkl')

@app.route('/predict', methods=['POST'])
def predict():
    # Récupérer les données envoyées dans la requête
    data = request.get_json()

    # Convertir toutes les valeurs de float32 en float
    data = {key: float(value) if isinstance(value, (np.float32, np.float64)) else value for key, value in data.items()}

    # Créer un DataFrame à partir des données reçues
    input_data = pd.DataFrame([{
        "heure_debut": data['heure_debut'],
        "duree_atelier": data['duree_atelier'],
        "heure_pointe": data['heure_pointe'],
        "weekend": data['weekend'],
        "categorie_broderie": data['categorie_broderie'],
        "categorie_tricot": data['categorie_tricot'],
        "categorie_peinture": data['categorie_peinture'],
        "categorie_poterie": data['categorie_poterie'],
        "categorie_couture": data['categorie_couture'],
        "categorie_bijouterie": data['categorie_bijouterie'],
        "jour_semaine_1": data['jour_semaine_1'],
        "jour_semaine_2": data['jour_semaine_2'],
        "jour_semaine_3": data['jour_semaine_3'],
        "jour_semaine_4": data['jour_semaine_4'],
        "jour_semaine_5": data['jour_semaine_5'],
        "jour_semaine_6": data['jour_semaine_6'],
        "jour_semaine_7": data['jour_semaine_7'],
        "niveau_diff_debutant": data['niveau_diff_debutant'],
        "niveau_diff_intermediaire": data['niveau_diff_intermediaire'],
        "niveau_diff_avance": data['niveau_diff_avance']
    }])

    expected_columns = [
        "heure_debut", "duree_atelier", "heure_pointe", "weekend",
        "categorie_broderie", "categorie_tricot", "categorie_peinture", "categorie_poterie", "categorie_couture", "categorie_bijouterie",
        "jour_semaine_1", "jour_semaine_2", "jour_semaine_3", "jour_semaine_4", "jour_semaine_5", "jour_semaine_6", "jour_semaine_7",
        "niveau_diff_debutant", "niveau_diff_intermediaire", "niveau_diff_avance"
    ]

    input_data.columns = [unidecode.unidecode(col).replace(" ", "_").lower() for col in input_data.columns]

    # Ajouter les colonnes manquantes avec des 0
    for col in expected_columns:
        if col not in input_data.columns:
            input_data[col] = 0

    # Faire la prédiction
    prediction = pipeline.predict(input_data)

    # Retourner la prédiction sous forme de JSON
    return jsonify({'prediction': round(prediction[0])})


if __name__ == '__main__':
    app.run(debug=True)
