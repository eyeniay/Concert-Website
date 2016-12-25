<?php 
	class Venue {
		private $Vid;
		private $Vname;
		private $address;
		private $capacity;
		private $Lid;
		
		
		
		function __construct($Vid = NULL, $Vname = NULL, $address = NULL , $capacity = NULL, $Lid = NULL) {
			$this->Vid = $Vid;
			$this->Vname = $Vname;
			$this->address = $address;
			$this->capacity = $capacity;
			$this->Lid = $Lid;
			
			
		}
		
		public function getVid() {
			return $this->Vid;
		}
		
		public function getVname() {
			return $this->Vname;
		}
		
		public function getaddress() {
			return $this->address;	
		}
		
		public function getcapacity() {
			return $this->capacity;	
		}
		
		public function getLid() {
			return $this->Lid;	
		}
		
		
	}
?>