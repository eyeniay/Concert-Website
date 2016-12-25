<?php 
	class Organization{
		private $Oid;
		private $Oname;
		private $Operformer_name;
		private $Vid;
		private $Did;
		private $Tid;
		private $TYid;
		
		
		
		function __construct($Oid = NULL, $Oname = NULL, $Operformer_name = NULL , $Vid = NULL, $Did = NULL, $Tid = NULL, $TYid = NULL) {
			$this->Oid = $Oid;
			$this->Oname = $Oname;
			$this->Operformer_name = $Operformer_name;
			$this->Vid = $Vid;
			$this->Did = $Did;
			$this->Tid = $Tid;
			$this->TYid = $TYid;
			
			
		}
		
		public function getOid() {
			return $this->Oid;
		}
		
		public function getOname() {
			return $this->Oname;
		}
		
		public function getOperformer_name() {
			return $this->Operformer_name;	
		}
		
		public function getVid() {
			return $this->Vid;	
		}
		
		public function getDid() {
			return $this->Did;	
		}
		
		public function getTid() {
			return $this->Tid;	
		}
		
		public function getTYid() {
			return $this->TYid;	
		}
		
	}
?>