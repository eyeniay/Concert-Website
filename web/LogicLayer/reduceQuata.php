<?php


require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/FullOrganizationManager.php");

if ($_POST){
	
	
			$id=$_POST["id"];
			$status=$_POST["number"];
			
			FullOrganizationManager::updateCapacity($id);
			
			
			
}
?>
		