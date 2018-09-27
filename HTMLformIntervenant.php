<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="./css/formulaire.css" />
        
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
        <title>Matière</title>      
        
    </head>
    <body>
        
    <!-- Menu -->

    <div class="bd">

		<a href="index.html">
        	<img src="Image/logo2.png" alt="" height="35px" class="menu" style="margin-top: 6px">
		</a>
        
        <div class="button button1 button1:hover" style="margin-left: 20px">
            <a href="index.html" class="button button1 button1:hover"><p>Accueil</p></a>
        </div>
        <div class="button button1 button1:hover" style="margin-left: 20px">
            <a href="formulaire.php" class="button button1 button1:hover"><p>Intervenant</p></a>
        </div>
        <div class="button button1 button1:hover" style="margin-left: 20px">
            <a href="matiere.php" class="button button1 button1:hover"><p>Matière</p></a>
        </div>

    </div>

    <!-- Fin Menu -->

    <div class="trait">
    </div>

    <!-- Formulaire -->
    
    <div class="contform">

        <div>
            <h1 style="color: #464646">
                Matière 
            </h1>
        </div>

        <div style="margin: 10px">
            <form action="/formulaire.php" method="POST">
                    Intitulé :<br><br>
                    <input type="text" name="firstname" value="" class="qx"><br><br>
                    Description :<br><br>
                    <input type="textarea" name="lastname" value="" class="qx"><br><br>
                    Date :<br><br>
                    <input type="text" name="mail" value="" class="qx"><br><br>
                    
                    <input type="submit" name="send" value="Envoyer" class="button button1 button1:hover">
              </form> 
        </div>
    </div> 

    <!-- Fin Formulaire -->

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