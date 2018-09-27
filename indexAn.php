<?php /*<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>

	<?php
		require "php/connexion.php";
		require "php/intervenant.php";

		//$intervenant = new Intervenant('CORNET','François','francoiscornet.ae@gmail.com','0123456789','Cergy');
		$tabId = array("name","surname","mail","phone","location");
		$tabVal = array("CORNET","François","francoiscornet.ae@gmail.com","0123456789","Cergy");
		//var_dump($intervenant);
		//var_dump($tabId);
		//var_dump($tabVal);

		$db = new Connexion('mysql', 'localhost:8888','test_projet','root','');
		$db->connect();
		//$db->printTable();
		$db->createEntry('test_intervenant', $tabId, $tabVal);
	?>

</body>
</html>
*/?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>

	<?php
		require "./php/connexion.php";
		require "./php/intervenant.php";

		//$intervenant = new Intervenant('CORNET','François','francoiscornet.ae@gmail.com','0123456789','Cergy');
		$tabId = array("name","surname","mail","phone","location");
		$tabVal = array("CORNET","François","francoiscornet.ae@gmail.com","0123456789","Cergy");
		//var_dump($intervenant);
		//var_dump($tabId);
		//var_dump($tabVal);

		$db = new connexion('mysql', 'localhost','test_projet','root','');
		//var_dump($tabId);
		//var_dump($tabVal);
		$db->connect();
		//$db->printTable();
		//$db->createEntry('test_intervenant', $tabId, $tabVal);
		$db->printTable('test_intervenant',$tabId);
	?>

</body>
</html>
