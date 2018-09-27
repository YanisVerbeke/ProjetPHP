<!DOCTYPE html>
<html>
	<head>
		<title>Ajouter une matière</title>
		<meta charset="UTF-8">
	</head>
	<body>

		<?php 
		require "Form.php";
		require "Matiere.php";
		$formMatiere = new Form()
		?>

		<form method="post">

		<?php 
		$formMatiere->input('input', 'Nom', 'text');
		$formMatiere->input('textarea', 'Description', 'text');
		$formMatiere->input('input', 'Date', 'date');
		$formMatiere->submit();
		?>

		</form>

		<?php 
		if(!(isset($_POST))) {
			$tab = $_POST;

			$nom = $tab['Nom'];
			$description = $tab['Descritpion'];
			$date = $tab['Date'];

			$tabMatiere;
			$matiere = new Matiere($nom, $description, $date);

			
		}
		?>
	</body>
</html>