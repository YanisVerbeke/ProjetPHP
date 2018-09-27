<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/grid.css">
	<meta charset="UTF-8">
</head>
<body>

	<?php
		require "./connexion.php";
		require "./intervenant.php";

		$tabId = array("name","surname","mail","phone","location");
		$tabVal = array("FAYE","Pierre","XeneSkyMaster@mail.co","852467931","Paris");

		$db = new connexion('mysql', 'localhost','test_projet','root','');
		$db->connect();
		//$db->createEntry('test_intervenant', $tabId, $tabVal);
		$db->printTable('test_intervenant',$tabId);
	?>

</body>
</html>
