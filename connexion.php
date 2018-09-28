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
		}catch (PDOException $e){
			print "Échec de connection à la base de données !";
			die();
		}
		return $this->db;
	}

	public function printTable($table){
		$buffer = $this->db->query('SELECT * FROM '.$table);
		$tab = $buffer->fetchAll();

		echo '<table>';
		echo '<tr id="key">';

		for ($i=0; $i < sizeof($tab[0])/2; $i++) {
			echo "<td>";
			$key = array_search($tab[0][$i], $tab[0]);
			echo $key;
			echo "</td>";
		}
		echo '</tr>';
		for($i = 0; $i < sizeof($tab); $i++){
				if($i % 2 != 0){
					$color = "grey";
				}else{
					$color = "white";
				}
				echo '<tr class="'.$color.'">';
				for ($j=0; $j < sizeof($tab[0])/2; $j++) {
					echo '<td class="case">'.$tab[$i][$j].'</td>';
				}
				echo '</tr>';
		}
		echo '</table>';
	}

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
			}
			$this->db->query($request);
		}else{
			echo "Erreur, le nombre de clés ne correspond pas au nombre de valeurs";
		}
	}
}
