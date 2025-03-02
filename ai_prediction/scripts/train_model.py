import pandas as pd
import unidecode
from sqlalchemy import create_engine
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.compose import ColumnTransformer
from sklearn.pipeline import Pipeline
from sklearn.metrics import mean_absolute_error, mean_squared_error
from xgboost import XGBRegressor
import joblib
import numpy as np
import json

# 📌 Connexion à la base de données MySQL
engine = create_engine('mysql+pymysql://root@127.0.0.1:3306/webproject')

# 📌 Charger les données depuis la base
query = """
SELECT 
    a.datecours AS date_atelier,         
    HOUR(a.datecours) AS heure_debut,     
    COUNT(i.id) AS nombre_participants,  
    a.categorie,                          
    a.duree AS duree_atelier,             
    DAYOFWEEK(a.datecours) AS jour_semaine,  
    a.niveau_diff                         
FROM atelierenligne a
LEFT JOIN inscriptionatelier i ON a.id = i.atelier_id
GROUP BY a.id;
"""
data = pd.read_sql(query, engine)
print(data["categorie"].unique())  # Vérifie si 'bijoux faits mains' est bien là
# 📌 Traitement des données
data["heure_debut"] = data["heure_debut"].astype(int)

# Définir les nouvelles colonnes
data["heure_pointe"] = data["heure_debut"].apply(lambda x: 1 if 9 <= x <= 18 else 0)
data["weekend"] = data["jour_semaine"].apply(lambda x: 1 if x >= 6 else 0)

# 📌 Encodage des variables catégorielles avec get_dummies
data = pd.get_dummies(data, columns=["categorie", "jour_semaine", "niveau_diff"])
# 📌 Assurer la présence de toutes les catégories possibles
expected_categories = ["broderie", "poterie", "tricot", "bijouterie", "couture", "peinture", "bijouterie"]
for cat in expected_categories:
    col_name = f"categorie_{cat}"
    if col_name not in data.columns:
        data[col_name] = 0  # Ajouter la colonne manquante avec des zéros

# 📌 Assurer la présence de tous les jours de la semaine (2 à 7, car 1 est supprimé par drop_first=True)
expected_days = [2, 3, 4, 5, 6, 7]  
for day in expected_days:
    col_name = f"jour_semaine_{day}"
    if col_name not in data.columns:
        data[col_name] = 0

# 📌 Assurer la présence de tous les niveaux de difficulté
expected_levels = ["debutant", "intermediaire", "avance"]
for level in expected_levels:
    col_name = f"niveau_diff_{level}"
    if col_name not in data.columns:
        data[col_name] = 0


# 📌 Nettoyage des noms de colonnes pour éviter les erreurs JSON
data.columns = [unidecode.unidecode(col).replace(" ", "_") for col in data.columns]

# 📌 Renommer les colonnes pour éviter les accents
data.rename(columns={"niveau_diff_debutant": "niveau_diff_debutant", 
                     "niveau_diff_intermediaire": "niveau_diff_intermediaire",
                     "niveau_diff_avance":"niveau_diff_avance"}, inplace=True)

data = data.loc[:, ~data.columns.duplicated()]

# 📌 Vérifier les noms de colonnes après transformation
print("Colonnes après transformation :", data.columns.tolist())

# Supprimer les colonnes dupliquées en gardant la première occurrence

# 📌 Définir les features (X) et la cible (y)
X = data.drop(columns=["date_atelier", "nombre_participants"])
y = data["nombre_participants"]

# 📌 Séparer les données en entraînement et test
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42, shuffle=True)

# 📌 Prétraitement des données
numeric_features = ["heure_debut", "duree_atelier"]
categorical_features = [col for col in X.columns if col not in numeric_features]

preprocessor = ColumnTransformer([
    ('num', StandardScaler(), numeric_features),
    ('cat', 'passthrough', categorical_features)
])

# 📌 Définition du modèle XGBoost
model = XGBRegressor(n_estimators=100, learning_rate=0.1, max_depth=3, random_state=42)

# 📌 Pipeline complet
pipeline = Pipeline([
    ('preprocessor', preprocessor),
    ('regressor', model)
])

# 📌 Entraînement du modèle
pipeline.fit(X_train, y_train)

# 📌 Sauvegarde du modèle
joblib.dump(pipeline, "ai_prediction/model/xgboost_model.pkl")
print("Modèle XGBoost sauvegardé.")

# 📌 Prédictions sur l'ensemble de test
y_pred = pipeline.predict(X_test)

# 📌 Calcul des métriques de performance
mae = mean_absolute_error(y_test, y_pred)
rmse = np.sqrt(mean_squared_error(y_test, y_pred))

print(f"Mean Absolute Error (MAE): {mae}")
print(f"Root Mean Squared Error (RMSE): {rmse}")

# 📌 Conversion en JSON pour vérifier
try:
    json_data = data.to_json(orient="records", force_ascii=False)
    print("Conversion JSON réussie !")
except Exception as e:
    print("Erreur JSON :", e)
