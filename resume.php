<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/grid.css">
	<link rel="stylesheet" href="./css/formulaire.css" />   
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<meta charset="UTF-8">
</head>
<body>

	<div class="bd">
        <a href="index.html">
            <img src="Image/logo2.png" alt="" height="35px" class="menu" style="margin-top: 6px">
        </a>
        <div class="menu menu1 surv surv:hover" style="margin-left: 250px">
            <a href="index.html" class="menu3"><p class="menu2">ACCUEIL</p></a>
        </div>
        <div class="menu menu1 surv surv:hover">
            <a href="formIntervenant.php" class="menu3"><p class="menu2">INTERVENANT</p></a>
        </div>
        <div class="menu menu1 surv surv:hover">
            <a href="formMatiere.php" class="menu3"><p class="menu2">MATIERE</p></a>
        </div>
        <div class="menu menu1 surv surv:hover">
            <a href="resume.php" class="menu3"><p class="menu2">RESUME</p></a>
        </div>
    </div>
    <div class="trait">
    </div>
    <br>
    <div class="contform">
		<?php
			require "./connexion.php";
			//require "./intervenant.php";

			$tabId = array("name","surname","mail","phone","location");
			//$tabVal = array("VERBEKE","Yanis","yanis.verbeke@edu.itescia.fr","0698453255","Cergy");

			$db = new connexion('mysql', 'localhost','test_projet','root','');
			$db->connect();
			//$db->createEntry('test_intervenant', $tabId, $tabVal);
			$db->printTable('test_intervenants');
			echo '<br>';
			$db->printTable('test_matiere');
		?>
	</div>

</body>
</html>