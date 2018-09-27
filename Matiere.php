<?php 
	class Matiere {
		private $nomMatiere;
		private $desciption;
		private $date;
		private $intervenant

		public function __construct($myNom, $myDesc, $myDate, $myinter) {
			$this->nomMatiere = $myNom;
			$this->description = $myDesc;
			$this->date = $myDate;
			$this->intervenant = $myinter
		}
		public function getAllInfo() {
			$tabInfo = [$this->nomMatiere, $this->description, $this->date, $this->intervenant];
			return $tabInfo;
			echo '$tabInfo';
		}
	}
?>
