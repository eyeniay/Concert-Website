<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/web/DataLayer/DB.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/Location.php");
	
	class LocationManager {
		
		public static function getLocation () {
			$db = new DB();
			$result = $db->getDataTable("CALL getLocation()");
			
			$allLocation = array();
			
			while($row = $result->fetch_assoc()) {
				$locationObj = new Location($row["Lid"], $row["Lname"]);
				array_push($allLocation, $locationObj);
			}
			
			return $allLocation;
		}
	}
	?>