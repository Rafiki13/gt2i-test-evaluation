Vous retrouverez dans ce dépôt les différents exercices proposés pour le test d'évaluation.

Le dossier [exercice 1](exercice%201) contient le module prestashop (il a été testé via 
[Ethereal.email](https://ethereal.email) pour la partie mail).

Le dossier [exercice 2](exercice%202) contient le script php, ainsi que le script de création de la table, et les fichiers 
fournis dans l'archive.

## Docker

Afin de faciliter le développement, j'ai utilisé Docker. Vous pouvez, si vous le souhaitez, utiliser celui-ci.
Le site y est déjà configuré avec un jeu de données, et le script de l'exercice 2 utilise les informations de connexion 
de la base de données gérée par Docker. Si vous optez pour une autre solution, pensez à modifier ces informations 
de connexion dans la classe `ConnexionBaseDeDonnees`.

Afin de tester la partie mail via docker, vous devrez modifier la configuration du serveur mail utilisé par prestashop. 
Vous pouvez utiliser l'outil [Ethereal.email](https://ethereal.email).

### Prérequis

Pour pouvoir utiliser Docker, il faut tout d'abord installer Docker Desktop que vous retrouverez
[ici](https://www.docker.com/products/docker-desktop/).

Une fois fait, nous aurons besoin de plusieurs images que vous pouvez installer en tapant les commandes
suivantes dans un terminal :

```shell
docker pull php:7.4-apache
```

```shell
docker pull mysql
```

### Mise en place et lancement du projet

En ayant Docker Desktop de lancé, ouvrez un terminal dans le répertoire [docker](docker) du projet.

Une fois le terminal ouvert, nous pouvons créer les images de nos conteneurs avec :

```shell
docker compose build
```

⚠️ Cette opération peut prendre un petit peu de temps et dépend de la vitesse de votre connexion internet.

Puis, nous pouvons créer les conteneurs en eux-mêmes avec :

```shell
docker compose up -d
```

Les conteneurs devraient être lancés, enjoy !

### Information complémentaires

Une fois tous les conteneurs lancés, l'accès au serveur PHP se fait à l'adresse [http://localhost:5002](http://localhost:5001)<br/>
Les informations de connexion pour le compte administrateur sont :

| Propriété    | Valeur                      |
|--------------|-----------------------------|
| Email        | raphael.delaygues@gmail.com |
| Mot de passe | SuperMotDePasse             |


Concernant la base de données, voici les informations de connexion :

| Propriété    | Valeur     |
|--------------|------------|
| Hôte         | localhost  |
| Port         | 5001       |
| Login        | root       |
| Mot de passe | admin      |