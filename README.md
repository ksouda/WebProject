#  Edayetna - Plateforme Artisanale Tunisienne

**Edayetna** est une plateforme web développée avec **Symfony 6** pour promouvoir les artisans tunisiens.  
Les utilisateurs peuvent acheter des produits faits main, des matériaux de création ou s'inscrire à des ateliers en ligne.  

Ce projet est réalisé dans le cadre du **Projet Intégré – Développement Web Java/Symfony** à **ESPRIT School of Engineering**.

---

##  Technologies utilisées

- Symfony 6 (PHP 8.2+)
- MySQL
- Doctrine ORM
- Twig
- Composer
- API Google OAuth
- Sockets (Notifications)
- Face Recognition (Python)
- HTML / CSS / JavaScript
- Bootstrap 5

---

## Fonctionnalités principales

###  Authentification

- Connexion par email/mot de passe
- Connexion via Google OAuth
- Connexion FaceID (pour l’administrateur)
- Mot de passe oublié (code envoyé par email)

###  Gestion des utilisateurs

- CRUD complet
- Affichage avec pagination
- Attribution de rôles (Client, Artisan, Admin, Admin BD)
- Blocage/Déblocage de comptes
- Historique de connexion
- Profil utilisateur avec modification des informations et mot de passe

###  Gestion des produits

- Ajout, modification, suppression de produits artisanaux
- Affichage dynamique des produits
- Recherche et filtre par catégorie / artisan / prix
- Stock et disponibilité

###  Gestion des matériaux

- Liste des matériaux proposés par les artisans
- Fiche de détail
- Gestion des stocks
- Affichage dans le calendrier selon date de livraison (JavaFX)

###  Gestion des ateliers en ligne

- Liste des ateliers proposés par les artisans
- Réservation en ligne
- Vidéos et supports intégrés
- Affichage dans un agenda interactif

###  Gestion des commandes

- Ajout au panier
- Calcul automatique du montant total (produits, frais de livraison)
- Contrôle de date de livraison (après date de commande)
- Génération de facture PDF
- Statut de commande (en cours, livrée, annulée)
- Notification d’enregistrement avec message de remerciement

###  Gestion des réclamations

- Envoi de réclamations par les clients
- Notification en temps réel pour l’admin (via socket)
- Réponse et archivage des réclamations
- Historique consultable

---

##  Installation du projet
###  Prérequis

- PHP 8.2+
- Composer
- MySQL
- Symfony CLI (recommandé)
- Node.js et npm (si assets à compiler)
