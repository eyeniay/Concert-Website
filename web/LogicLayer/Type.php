<?php 
	class Type {
		private $TYid;
		private $TYname;
		
		
		
		function __construct($TYid = NULL, $TYname = NULL) {
			$this->TYid = $TYid;
			$this->TYname = $TYname;
			
			
		}
		
		public function getTYid() {
			return $this->TYid;
		}
		
		public function getTYname() {
			return $this->TYname;
		}
		
		
	}
?>