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
		$formMatiere->input('input', 'Intervenant', 'text');
		$formMatiere->input('textarea', 'Description', 'text');
		$formMatiere->input('input', 'Date', 'date');
		$formMatiere->submit();
		?>

		</form>

		<?php 
		if(!(isset($_POST))) {
			$tab = $_POST;
			$nom = $tab['Nom'];
			$intervenant = $tab['Intervenant'];
			$description = $tab['Descritpion'];
			$date = $tab['Date'];
			$matiere = new Matiere($nom, $intervenant, $description, $date);
		}
		?>
	</body>
</html>
