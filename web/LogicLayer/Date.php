<?php 
	class Date {
		private $Did;
		private $Dday;
		
		
		
		function __construct($Did = NULL, $Dday = NULL) {
			$this->Did = $Did;
			$this->Dday = $Dday;
			
			
		}
		
		public function getDid() {
			return $this->Did;
		}
		
		public function getDday() {
			return $this->Dday;
		}
		
		
	}
?>