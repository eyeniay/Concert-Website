<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/web/DataLayer/DB.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/Organization.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/FullOrganization.php");
	
	class OrganizationManager {
		
		public static function getAllEventbyid ($id) {
			$db = new DB();
			$result = $db->getDataTable("CALL getEvents('$id')");
			
			$allEvents = array();
			
			while($row = $result->fetch_assoc()) {
				$eventsObj = new Organization($row["Oid"], $row["Oname"], $row["Operformer_name"] , $row["Vid"], $row["Did"], $row["Tid"], $row["TYid"]);
				array_push($allEvents, $eventsObj);
			}
			
			return $allEvents;
		}
		
		public static function getAllEvents () {
			$db = new DB();
			$result = $db->getDataTable("CALL getAllEvents()");
			
			$allEvents = array();
			
			while($row = $result->fetch_assoc()) {
				$eventsObj = new Organization($row["Oid"], $row["Oname"], $row["Operformer_name"] , $row["Vid"], $row["Did"], $row["Tid"], $row["TYid"]);
				array_push($allEvents, $eventsObj);
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
		/*
		public static function insertNewUser($userName, $UserSurname,$Mail,$Password,$Question,$Answer) {
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO users(UserID, UserName, UserSurname,Mail,Password,Question,Answer,IsUserAdmin) VALUES (NULL, '$userName', '$UserSurname',$Mail,$Password,$Question,$Answer,0)");
			return $success;
		}
		public static function deleteUser($id)
		{
			$db = new DB();
			$success = $db->executeQuery("delete from deneme where id='$id'");
			return $success;
			
		}
		*/
	}
?>