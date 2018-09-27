<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <?PHP
      $ch1 = 'unchecked';
      $ch2 = 'unchecked';

      $chBoth = false;
      if($ch1 == "checked" && $ch2 == "checked") $chBoth = true;
        if (isset($_POST['Submit1'])) {

          if (isset($_POST['ch1'])) {
            $ch1 = $_POST['ch1'];

            if ($ch1 == 'net') {
              $ch1 = 'checked';
            }
          }

          if (isset($_POST['ch2'])) {
            $ch2 = $_POST['ch2'];

            if ($ch2  = 'word') {
              $ch2 = 'checked';
            }
          }
        }
    ?>
    
  </head>
  <body>

    <?php
      require "Form.php";
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
      $myForm->input('Mail');
      $myForm->input('Tel');
      $myForm->input('Lieu');
    ?>

    </form>

    <Input type = 'Checkbox' Name ='ch1' value ="net" 
      <?PHP print $ch1; ?>
    >
    Cergy
    <P>
    <Input type = 'Checkbox' Name ='ch2' value="word" 
      <?PHP print $ch2; ?>
    >
    Champeret
    <P>
    <?php
      $myForm->input('Contenu du cours (résumé)');
      $myForm->submit();
      
      $tabPers;
      $pers = new tervenant($nom,$prenom,$mail,$tel,$lieu,$cours);

      $tabPers[]=$pers;
      var_dump($pers);
      ?>

  </body>
</html>