<?php 
	class User {
		private $id;
		private $name;
		private $surname;
		private $mail;
		private $password;
		private $question;
		private $answer;
		private $isuseradmin;
		
		
		function __construct($id = NULL, $name = NULL, $surname = NULL , $mail = NULL, $password = NULL, $question = NULL, $answer = NULL, $isuseradmin = NULL) {
			$this->id = $id;
			$this->name = $name;
			$this->surname = $surname;
			$this->mail = $mail;
			$this->password = $password;
			$this->question = $question;
			$this->answer = $answer;
			$this->isuseradmin = $isuseradmin;
			
		}
		
		public function getID() {
			return $this->id;
		}
		
		public function getName() {
			return $this->name;
		}
		
		public function getSurname() {
			return $this->surname;	
		}
		
		public function getMail() {
			return $this->mail;	
		}
		
		public function getPassword() {
			return $this->password;	
		}
		
		public function getQuestion() {
			return $this->question;	
		}
		
		public function getAnswer() {
			return $this->answer;	
		}
		public function getIsuseradmin() {
			return $this->isuseradmin;	
		}
	}
?>