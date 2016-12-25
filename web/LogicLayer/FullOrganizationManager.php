<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/web/DataLayer/DB.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/FullOrganization.php");
	
	class FullOrganizationManager {
		
		public static function getAllEvent() {
			$db = new DB();
			$result = $db->getDataTable("CALL getOrganization()");
			
			$allEvents = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new FullOrganization($row["Oname"], $row["Operformer_name"], $row["Vname"] , $row["Dday"], $row["Lname"], $row["TYname"], $row["Tprice"]);
				array_push($allEvents, $userObj);
			}
			
			return $allEvents;
		}
		
		public static function getOrganizationbyID ($id) {
			$db = new DB();
			$result = $db->getDataTable("CALL getOrganizationbyID('$id')");
			$allEventsOid=array();
			
			while($row = $result->fetch_assoc()) {
			$eventsbyOidObj = new FullOrganization($row["Oname"], $row["Operformer_name"], $row["Vname"] , $row["Dday"], $row["Lname"], $row["TYname"], $row["Tprice"]);
				array_push($allEventsOid, $eventsbyOidObj);
			}
			
			return $allEventsOid;
		}
		
		public static function insertNewUser($userName, $UserSurname,$Mail,$Password,$Question,$Answer) {
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO users(UserID, UserName, UserSurname,Mail,Password,Question,Answer,IsUserAdmin) VALUES (NULL, '$userName', '$UserSurname',$Mail,$Password,$Question,$Answer,0)");
			return $success;
		}
		
		
	}
?>