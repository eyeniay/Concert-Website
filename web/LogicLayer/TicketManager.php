<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/web/DataLayer/DB.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/web/LogicLayer/Ticket.php');
	
	class TicketManager {
		
		public static function getAllTicket () {
			$db = new DB();
			$result = $db->getDataTable("CALL getAllTicket()");
			
			$allType = array();
			
			while($row = $result->fetch_assoc()) {
				$typeObj = new Ticket($row["Tid"], $row["Tprice"]);
				array_push($allType, $typeObj);
			}
			
			return $allType;
		}
		
		
					public static function getSpecificTicket ($id) {
			$db = new DB();
			$result = $db->getDataTable("CALL getSpecificTicket('$id')");
			
			$allType = array();
			
			while($row = $result->fetch_assoc()) {
				$typeObj = new Ticket($row["Tid"], $row["Tprice"]);
				array_push($allType, $typeObj);
			}
			
			return $allType;
		}
		
		public static function insertNewTicket($ticketprice) {
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO ticket(Tprice) VALUES ('$ticketprice')");
			return $success;
		}
		public static function deleteTicket($id)
		{
			$db = new DB();
			$success = $db->executeQuery("delete from ticket where Tid='$id'");
			return $success;
			
		}
		
			public static function updateTicket($id,$ticketprice)
		{
			$db = new DB();
			$success = $db->executeQuery("update ticket set Tprice='$ticketprice' where Tid='$id'");
			return $success;
			
		}
	
	}
?>