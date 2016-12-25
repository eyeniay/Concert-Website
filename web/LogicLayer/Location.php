<?php 
	class Location {
		private $Lid;
		private $Lname;
		
		
		
		function __construct($Lid = NULL, $Lname = NULL) {
			$this->Lid = $Lid;
			$this->Lname = $Lname;
			
			
		}
		
		public function getLid() {
			return $this->Lid;
		}
		
		public function getLname() {
			return $this->Lname;
		}
		
		
	}
?>