<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">    
		<link rel="stylesheet" href="./css/formulaire.css" />  
        <link rel="stylesheet" type="text/css" href="./css/grid.css"> 
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<title>Ajouter un intervenant</title>
    </head>
    <body>
        
    <!-- Menu -->

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

    <!-- Fin Menu -->

    <div class="trait">
    </div>

    <!-- Formulaire -->
    
    <div class="contform" style="margin-bottom: 110px">

        <div>
            <h1 style="color: #464646">
                Formulaire 
            </h1>
        </div>
			<?php 
				require "Form.php";
				require "Intervenant.php";
                require "connexion.php";
				$formIntervenant = new Form();
			?>
				
        <div style="margin: 10px">
            <form method="GET" action="formIntervenant.php">
				
			    <?php 
				    $formIntervenant->input('input', 'Nom', 'text', '', 'qx');
				    $formIntervenant->input('input', 'Prenom', 'text', '', 'qx');
				    $formIntervenant->input('input', 'Mail', 'text', '', 'qx');
				    $formIntervenant->input('input', 'Telephone', 'text', '', 'qx');
				    $formIntervenant->submit();
				?>
			  </form> 
        </div>
    </div> 

    <!-- Fin Formulaire -->
	
	<?php 
		$nom = $_GET['Nom'];
		$prenom = $_GET['Prenom'];
		$mail = $_GET['Mail'];
		$telephone = $_GET['Telephone'];
        $tab = array($nom,$prenom,$mail,$telephone);
		$intervenant = new Intervenant($nom, $prenom, $mail, $telephone);
        $tabId = array("name", "surname", "mail", "phone");
        $co = new Connexion('mysql','localhost','test_projet','root','');
        $co->connect();
        $co->createEntry('test_intervenants',$tabId,$tab);
        $co->printTable('test_intervenants');
	?>

    <!-- Bas de Page -->
		
	<footer>
        <p>
            <img src="./Image/logos1.jpg" class="footerimg1 dn"><br>
            <img src="./Image/logo2.png" class="footerimg2 dn">
		</p>
		<p>La Coding Factory by ITESCIA est une école du code créée à l'initiative d'<span>ITESCIA</span> , école de la <span>CCI Paris Ile-de-France.</span></p>
		<div class="section_footer_colored">
			<p class="mention_padding">
                    <a href="#" class="linkfooter">Mention Légales</a> - <a href="#" class="linkfooter">Plan du Site</a> - <a href="#" class="linkfooter">Contact</a>
            </p>
			<p>Copyright 2018</p>
			<p>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
			    <i class="fab fa-linkedin-in"></i>
                <i class="fab fa-instagram"></i>
            </p>

        </div>
    </footer>
    
    <!-- Fin Bas de Page-->
    
</body>
</html>
