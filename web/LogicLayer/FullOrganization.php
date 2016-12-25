<?php 
	class FullOrganization{
	
		private $Oname;
		private $Operformer_name;
		private $Vname;
		private $Dday;
		private $Lname;
		private $TYname;
		private $Tprice;
		
		
		function __construct($Oname = NULL, $Operformer_name = NULL , $Vname = NULL, $Dday = NULL, $Lname = NULL, $TYname = NULL, $Tprice = NULL) {
			
			$this->Oname = $Oname;
			$this->Operformer_name = $Operformer_name;
			$this->Vname = $Vname;
			$this->Dday = $Dday;
			$this->Lname = $Lname;
			$this->TYname = $TYname;
			$this->Tprice = $Tprice;
			
		}
		
		
		
		public function getOname() {
			return $this->Oname;
		}
		
		public function getOperformer_name() {
			return $this->Operformer_name;	
		}
		
		public function getVname() {
			return $this->Vname;	
		}
		
		public function getDday() {
			return $this->Dday;	
		}
		
		public function getLname() {
			return $this->Lname;	
		}
		
		public function getTYname() {
			return $this->TYname;	
		}
		
		public function getTprice() {
			return $this->Tprice;	
		}
	}
?>