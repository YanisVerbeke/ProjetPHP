<?php 
	class Intervenant {
		private $nom;
		private $prenom;
		private $mail;
		private $tel;
		private $site;

		public function __construct($myNom, $myPrenom, $myMail, $myTel, $mySite) {
			$this->nom = $myNom;
			$this->prenom = $myPrenom;
			$this->mail = $myMail;
			$this->tel = $myTel;
			$this->site = $mySite;
		}
		public function getNom() {
			return $this->nom;
		}
		public function getPrenom() {
			return $this->prenom;
		}
		public function getMail() {
			return $this->mail;
		}
		public function getTel() {
			return $this->tel;
		}
		public function getSite() { 
			return $this->site;
	}
		public function getAllInfo() {
			$tabInfo = [$this->nom, $this->prenom, $this->mail, $this->tel, $this->site];
			return $tabInfo;
			//var_dump($tabInfo);
		}
	}
?>