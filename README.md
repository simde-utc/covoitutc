# Covoit'UTC
Site à destination des étudiants de l'UTC pour proposer et chercher des covoiturages.

## Installation
Vous devez au préalable avoir téléchargé *composer* https://getcomposer.org/download/

**Linux**
```bash
# On clone le repo
git clone https://github.com/simde-utc/covoitutc.git
cd covoitutc

# On crée le fichier .env à partir de l'exemple
mv .env.example .env
# Pensez à modifier le fichier .env en y mettant les informations importantes

# On installe le projet
composer install
php artisan key:generate

# Pour lancer le serveur
php artisan serve
```
Pour la BDD on la crée à la main avec le fichier SQL dans le dossier *database*.

**Windows et Mac** \
https://fr.wikihow.com/installer-Linux

## To do
* Meilleure BDD
* Trajets récurrents
* Connexion au portail des assos
