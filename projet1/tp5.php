<?php

/**
 * 
 * 1- Realisation de la page d'acceuil
 * 2- Récapitulation des informationse et sauvegardes des fichiers
 * 3- Sécurisation des informations
 * 4- Sauvegarde 
 * 5- Affichager un message de confirmatio au candidat 
 * 6- Administration des candidatures
 */










?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Optional JavaScript; choose one of the two! -->http://127.0.0.1/projet1/traitement.php
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->http://127.0.0.1/projet1/traitement.php

   
    <div class="container" >
        <div class="row" >

        <form method="post" enctype="multipart/form-data" action="traitement.php">
        <div class="mb-3">
            <label for="nom" class="form-label">votre nom</label>
            <input type="text" class="form-control" name="nom" id="nom" >
        </div>


        <div class="mb-3">
            <label for="prenom" class="form-label">votre prenom</label>
            <input type="text" required="required" class="form-control" name="prenom" id="prenom">
        </div>

        http://127.0.0.1/projet1/traitement.php

        <div class="mb-3">
            <label for="telephone" class="form-label">votre telephone</label>
            <input type="tel" required="required" class="form-control" name="telephone" id="telephone">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">votre email</label>
            <input type="email" required="required" class="form-control" name="email" id="email">
        </div>
        <label for="motivation" class="form-label">veuiller ajouter votre lette de motivation</label>
  <textarea class="form-control" id="motivation"  name="motivation" rows="3"></textarea>

        
        <div class="mb-3">
        <label for="cv" class="form-label">veuiller selectionner votre cv</label>
        <input class="form-control"required="required"  type="file" id="cv" name="cv">
        </div>
        <div class="mb-3">
        <label for="diplome" class="form-label">veuiller selectionner votre diplôme</label>
        <input class="form-control" required="required" type="file" id="diplome" name="diplome">
        </div>
        <div class="mb-3">
     
        <button type="submit" class="btn btn-primary">Postuler</button>
        </form>
    
    
        </div>

    </div>

  </body>

</html>
