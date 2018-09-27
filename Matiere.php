<?php 
	class Matiere {
		private $nomMatiere;
		private $desciption;
		private $date;

		public function __construct($myNom, $myDesc, $myDate) {
			$this->nomMatiere = $myNom;
			$this->description = $myDesc;
			$this->date = $myDate;
		}
		public function getAllInfo() {
			$tabInfo = [$this->nomMatiere, $this->description, $this->date];
			return $tabInfo;
			echo '$tabInfo';
		}
	}
?>