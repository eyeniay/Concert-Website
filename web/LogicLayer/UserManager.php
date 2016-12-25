<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/web/DataLayer/DB.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/User.php");
	
	class UserManager {
		
		public static function getAllUsers () {
			$db = new DB();
			$result = $db->getDataTable("CALL getUser()");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new User($row["UserID"], $row["UserName"], $row["UserSurname"] , $row["Mail"], $row["Password"], $row["Question"], $row["Answer"], $row["IsUserAdmin"]);
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
		}
		
			public static function getSpecificUser ($UserID) {
			$db = new DB();
			$result = $db->getDataTable("CALL getSpecificUser('$UserID')");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new User($row["UserID"], $row["UserName"], $row["UserSurname"] , $row["Mail"], $row["Password"], $row["Question"], $row["Answer"], $row["IsUserAdmin"]);
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
		}
		
		public static function insertNewUser($userName, $UserSurname,$Mail,$Password,$Question,$Answer,$isadmin) 
		{
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO users(UserID, UserName, UserSurname,Mail,Password,Question,Answer,IsUserAdmin) VALUES (NULL, '$userName', '$UserSurname','$Mail','$Password','$Question','$Answer','$isadmin')");
			return $success;
		}
		
		public static function loginControl($mail, $password) 
		{
			$db = new DB();
			$result = $db->getDataTable("CALL loginControl('$mail','$password')");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new User($row["UserID"], $row["UserName"], $row["UserSurname"] , $row["Mail"], $row["Password"], $row["Question"], $row["Answer"], $row["IsUserAdmin"]);
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
		}
		public static function deleteUser($id)
		{
			$db = new DB();
			$success = $db->executeQuery("delete from users where UserID='$id'");
			return $success;
			
		}
		
		public static function updateUser($id,$userName, $UserSurname,$Mail,$Password,$Question,$Answer,$IsUserAdmin)
		{
			$db = new DB();
			$success = $db->executeQuery("update users set UserName='$userName',UserSurname='$UserSurname',Mail='$Mail',Password='$Password',Question='$Question',Answer='$Answer',IsUserAdmin='$IsUserAdmin' where UserID='$id'");
			return $success;
			
		}
		
	}
?>