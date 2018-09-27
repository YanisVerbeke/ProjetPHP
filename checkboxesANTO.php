<html>
<head>
<title>Checkboxes</title>

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

<Input type = 'Checkbox' Name ='ch1' value ="net" 
<?PHP print $ch1; ?>
>Visual Basic .NET
<P>
<Input type = 'Checkbox' Name ='ch2' value="word" 
<?PHP print $ch2; ?>
>Microsoft Word
<P>

<?php
	$tabPers;
        $pers = new personne($nom,$prenom,$mail,$tel,$lieu);

        $tabPers[]=$pers;
        var_dump($pers);
        
?>



</body>
</html>
