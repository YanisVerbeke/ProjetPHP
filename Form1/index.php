<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      require "Form.php";
      require "personne.php";
      require "request.php";
      $myForm = new Form('post');
      //$bdd = new request('mysql', 'localhost', 'personnes', 'root', '');
      //$bdd->getmybdd();
      //$bdd->getAllRow('intervenants');
    ?>

      <form method="post">

      <?php
        $myForm->input('Nom');
        $myForm->input('Prenom');
        $myForm->input('Adresse');
        $myForm->input('Age');
        $myForm->submit();
      ?>

      </form>

      <?php

        if(!(isset($_POST))){
          $tab = $_POST;


        $nom = $tab['Nom'];
        $prenom = $tab['Prenom'];
        $adress = $tab['Adresse'];
        $age = $tab['Age'];

        $tabPers;
        $pers = new personne($nom,$prenom,$adress,$age);

        $tabPers[]=$pers;
        var_dump($pers);
        
        }


      ?>

  </body>
</html>
