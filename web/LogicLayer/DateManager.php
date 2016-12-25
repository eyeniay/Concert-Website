<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/web/DataLayer/DB.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/Date.php");
	
	class DateManager {
		
		public static function getDateId ($dname) {
			$db = new DB();
			$result = $db->getDataTable("CALL IsDateValid('$dname')");
			
			$alldate = array();
			
			while($row = $result->fetch_assoc()) {
				$dateObj = new Date($row["Did"]);
				array_push($alldate, $dateObj);
			}
			
			return $alldate;
		}
		
		public static function getAllDate () {
			$db = new DB();
			$result = $db->getDataTable("CALL getAllDate()");
			
			$allType = array();
			
			while($row = $result->fetch_assoc()) {
				$typeObj = new Date($row["Did"], $row["Dday"]);
				array_push($allType, $typeObj);
			}
			
			return $allType;
		}
		
		
					public static function getSpecificDate ($id) {
			$db = new DB();
			$result = $db->getDataTable("CALL getSpecificDate('$id')");
			
			$allType = array();
			
			while($row = $result->fetch_assoc()) {
				$typeObj = new Date($row["Did"], $row["Dday"]);
				array_push($allType, $typeObj);
			}
			
			return $allType;
		}
		
		public static function insertNewDate($date) 
		{
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO date(Dday) VALUES ('$date')");
			return $success;
		}
		
		public static function deleteDate($id)
		{
			$db = new DB();
			$success = $db->executeQuery("delete from date where Did='$id'");
			return $success;
			
		}
		
		public static function updateDate($id,$Dday)
		{
			$db = new DB();
			$success = $db->executeQuery("update date set Dday='$Dday' where Did='$id'");
			return $success;
			
		}
		
	}
?>