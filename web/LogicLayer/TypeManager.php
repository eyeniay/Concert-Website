<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/web/DataLayer/DB.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/web/LogicLayer/Type.php');
	
	class TypeManager {
		
		public static function getAllType () {
			$db = new DB();
			$result = $db->getDataTable("CALL getType()");
			
			$allType = array();
			
			while($row = $result->fetch_assoc()) {
				$typeObj = new Type($row["TYid"], $row["TYname"]);
				array_push($allType, $typeObj);
			}
			
			return $allType;
		}
		
		public static function getTypeCount ($id) {
			$db = new DB();
			$result = $db->getDataTable("CALL getTypeCount('$id')");
			$typeObj=0;
			
			
			while($row = $result->fetch_assoc()) {
				$typeObj = $row["count"];
				
			}
			
			return $typeObj;
		}
		
	}
?>