<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/web/DataLayer/DB.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/Venue.php");
	
	class VenueManager {
		
		
		public static function getVenueId ($venName) {
			$db = new DB();
			$result = $db->getDataTable("CALL IsVenueValid('$venName')");
			
			$allvenue = array();
			
			while($row = $result->fetch_assoc()) {
				$venObj = new Venue($row["Vid"]);
				array_push($allvenue, $venObj);
			}
			
			return $allvenue;
		}
		
		public static function getAllVenue () {
			$db = new DB();
			$result = $db->getDataTable("CALL getAllVenue()");
			
			$allType = array();
			
			while($row = $result->fetch_assoc()) {
				$typeObj = new Venue($row["Vid"], $row["Vname"], $row["Vaddress"] , $row["Vcapacity"], $row["Lid"]);
				array_push($allType, $typeObj);
			}
			
			return $allType;
		}
			public static function getSpecificVenue ($id) {
			$db = new DB();
			$result = $db->getDataTable("CALL getSpecificVenue('$id')");
			
			$allVen = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new Venue($row["Vid"], $row["Vname"], $row["Vaddress"] , $row["Vcapacity"], $row["Lid"]);
				array_push($allVen, $userObj);
			}
			
			return $allVen;
		}
		
		public static function insertNewVenue($venName, $venAddress,$venCapacity,$locId)
		{
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO venue(Vname, Vaddress,Vcapacity,Lid) VALUES ('$venName', '$venAddress','$venCapacity','$locId')");
			return $success;
		}
		
		
		public static function deleteVenue($id)
		{
			$db = new DB();
			$success = $db->executeQuery("delete from venue where Vid='$id'");
			return $success;
			
		}
		
		public static function updateVenue($id,$venName, $venAddress,$venCapacity,$locId)
		{
			$db = new DB();
			$success = $db->executeQuery("update venue set Vname='$venName',Vaddress='$venAddress',Vcapacity='$venCapacity',Lid='$locId' where Vid='$id'");
			return $success;
			
		}
		
		
	}
?>