<!DOCTYPE html>
<html lang="en">
<head>
<?php require('head.php') ?>
</head>


<body>
<?php require('header.php') ?>

<div class="container" style="background-color:whitesmoke; padding:3em; margin-top:3em; border-radius:10px">
        <form  class="form">
          <div class="article">

            <h1 style="text-align:center"> Formulaire de contact </h1>

            <div class="form-group">
                <label for="name"> Nom </label>
                <input type="text" name="Nom" id="Name" class="form-control" placeholder="votre nom" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="votre prénom" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="email"> Email </label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Votre email" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="Message"> Votre message </label>
                <input type="text" name="" id="Message" class="form-control" placeholder="Votre message" aria-describedby="helpId">
            </div>
            <div class="d-flex justify-content-end">
            <button  type="submit" style="background-color:grey; color:whitesmoke">Envoyer </button>
            </div>
          </div>
          
        </form>
      
    </div>

</body>

    


<?php require('script.php') ?>

</html>