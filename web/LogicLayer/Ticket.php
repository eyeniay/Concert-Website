<?php 
	class Ticket {
		private $Tid;
		private $Tprice;
		
		
		
		function __construct($Tid = NULL, $Tprice = NULL) {
			$this->Tid = $Tid;
			$this->Tprice = $Tprice;
			
			
		}
		
		public function getTid() {
			return $this->Tid;
		}
		
		public function getTprice() {
			return $this->Tprice;
		}
		
		
	}
?>