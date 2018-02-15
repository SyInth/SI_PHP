# Semaine intensive PHP
  Groupe 9 : Marie, Léa, Vincent, Mahel, Anthony en W1 P2020.

## Intro

  Ceci est le fruit du travail du groupe 9 lors de la semaine intensive dédiée au php dans le cadre d'HETIC.

  Le sujet nous impose de gérer une base de donnée MySQL, à l'aide d'un CRUD (CREATE READ UPDATE DELETE) developpé en php.

  Nous avons décidé de créer un site sur le thème de l'animation japonaise, étant un centre d'intérêt commun. Notre projet consiste à créer une plateforme type allociné pour les animes.

  Nos techs :

      - PHP 7.2.2
      - MySQL 5.7.21
      - NGNIX 1.12.2

## Nomenclature du repo

  ```
  SI_PHP
  |
  |-actions
  |   |--action_add.php
  |   |--action_delete.php
  |   |--action_update.php
  |
  |--index.php
  |--init_db.php
  |--admin.php
  |--add.php
  |--update.php
  |--anime_description.php
  |--anime_list.php
  ```

## Documentation

  Voici une rapide description de la fonction de chaque ficher. Pour plus de détails consultez les commentaires dans le code.

  - ```admin.php```
      Ce fichier affiche notre base de donnée sous forme d'un tableau. Cette page ne sera consultée que par les admins. Elle est le Read de notre CRUD.

  - ```index.php```
      Ce fichier est la page principale de notre site, coté client.

  - ```init_db.php```
      Ce fichier est le lien entre notre base de donnée MySQL, et notre interface admin de l'```index.php```.

  - ```action_add.php```
      Ce fichier est notre fonction permettant d'ajouter des données dans la base de donnée, elle récupère .

  - ```add.php```
      Ce fichier est notre page back-office qui affiche les inputs permettant d'ajouter des données dans la base de donnée.

  - ```action_update.php```
      Ce fichier est notre fonction permettant de modifier des données dans la base de donnée.

  - ```update.php```
      Ce fichier est notre page back-office qui affiche les inputs permettant de modifier des données dans la base de donnée.

  - ```action_delete.php```
      Ce fichier est notre fonction permettant de supprimer des données dans la base de donnée, elle est implémentée directement dans notre table sous forme d'un bouton au bout de la ligne ciblée, elle supprime la ligne entière.

  - ```anime_description.php```
      Ce fichier est la page de description des anime, client.

  - ```anime_list.php```
      Page d'affichage de tous les animes du site, côté client.