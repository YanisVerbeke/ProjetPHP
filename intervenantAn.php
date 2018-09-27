<?php 
    class Intervenant {
        private $name;
        private $surname;
        private $mail;
        private $phone;
        private $location;

        public function __construct($myNom, $myPrenom, $myMail, $myTel, $mySite) {
            $this->name = $myNom;
            $this->surname = $myPrenom;
            $this->mail = $myMail;
            $this->phone = $myTel;
            $this->location = $mySite;
        }
        public function getNom() {
            return $this->name;
        }
        public function getPrenom() {
            return $this->surname;
        }
        public function getMail() {
            return $this->mail;
        }
        public function getTel() {
            return $this->phone;
        }
        public function getSite(){
            return $this->location;
        } 
        public function getDataTab(){
            
        }
    }  
?>