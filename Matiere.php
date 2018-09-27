<?php 
	class Matiere {
		private $nomMatiere;
		private $intervenant;
		private $desciption;
		private $date;
		
		public function __construct($myNom, $myinter, $myDesc, $myDate) {
			$this->nomMatiere = $myNom;
			$this->intervenant = $myinter;
			$this->description = $myDesc;
			$this->date = $myDate;
			
		}
		public function getAllInfo() {
			$tabInfo = [$this->nomMatiere, $this->intervenant, $this->description, $this->date];
			return $tabInfo;
			echo '$tabInfo';
		}
	}
?>
