<?php


class Connexion
{
	private $type;
	private $host;
	private $dbname;
	private $username;
	private $password;
	private $db;

	public function __construct($type,$host,$dbname,$username,$password)
	{
		$this->type = $type;
		$this->host = $host;
		$this->dbname = $dbname;
		$this->username = $username;
		$this->password = $password;
	}

	public function connect()
	{
		try{
			$this->db = new PDO($this->type.':host='.$this->host.';dbname='.$this->dbname,$this->username, $this->password);
			//"mysql:host=localhost:8888;dbname=test_intervenant"
		}catch (PDOException $e){
			print "Échec de connection à la base de données !";
			die();
		}
		return $this->db;
	}
	public function printTable($table,$tabId){
		$buffer = $this->db->query('SELECT * FROM '.$table);
		$tab = $buffer->fetchAll();

		echo '<table>';
		echo '<tr id="keyLine">';
		for ($i=0; $i < sizeof($tabId); $i++) {
			echo '<th>'.$tabId[$i].'</th>';
		}
		echo '</tr>';
		for($i = 0; $i < sizeof($tab); $i++){
			if($i % 2 != 0){
				$color = "grey";
			}else{
				$color = "white";
			}
			for($j = 0; $j < sizeof($tabId); $j++){
				//var_dump($tab[$i][$tabId[$j]]);
				echo '<tr class="'.$color.'">';
				for ($j=0; $j < sizeof($tab); $j++) {
					echo '<td class="case">'.$tab[$i][$j].'</td>';
				}
				echo '</tr>';
			}
			echo '</table>';
		}
	}
		//var_dump($tab[0]['name']);
	public function createEntry($table,$tabId,$tabVal)
	{
		$length = sizeof($tabId);
		if($length == sizeof($tabVal)){
			$request = "INSERT INTO `".$table."` (";
			for ($i=0; $i < $length; $i++) {
				if($i != ($length -1)){
					$request = $request."`".$tabId[$i]."`, ";
				}else{
					$request = $request."`".$tabId[$i]."`)";
				}
			}
			$request = $request." VALUES (";
			for ($i=0; $i < $length; $i++) {
				if($i != ($length - 1)){
					$request = $request."'".$tabVal[$i]."', ";
				}else{
					$request = $request."'".$tabVal[$i]."')";
				}
			} echo $request;
			$this->db->query($request);
		}else{
			echo "Erreur, le nombre de clés ne correspond pas au nombre de valeurs";
		}
	}
}
