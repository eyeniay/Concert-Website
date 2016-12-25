<?php


require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/TypeManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/LocationManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/TicketManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/DateManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/VenueManager.php");

if ($_POST){
	
	
	if(isset($_POST["gondertype"]) && $_POST["gondertype"]=="Update")	
		{
				
			$id=$_POST["id"];
			$typename=$_POST["name"];
			
			
			
			$kayit = TypeManager::updateType($id,$typename);
			
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel1.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gondertype"]) && $_POST["gondertype"]=="Delete")	
	  {
			  $id=$_POST["id"];
			  
			  $kayit = TypeManager::deleteType($id);
		
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel1.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gonderlocation"]) && $_POST["gonderlocation"]=="Update")	
		{
				
			$id=$_POST["id"];
			$locname=$_POST["name"];
			$idnew=$_POST["idnew"];
			
			
			$kayit = LocationManager::updateLocation($id,$idnew,$locname);
			
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel1.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gonderlocation"]) && $_POST["gonderlocation"]=="Delete")	
	  {
			  $id=$_POST["id"];
			  
			  $kayit = LocationManager::deleteLocation($id);
		
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel1.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gonderticket"]) && $_POST["gonderticket"]=="Update")	
		{
				
			$id=$_POST["id"];
			$ticketprice=$_POST["name"];
		
			
			
			$kayit = TicketManager::updateTicket($id,$ticketprice);
			
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel1.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gonderticket"]) && $_POST["gonderticket"]=="Delete")	
	  {
			  $id=$_POST["id"];
			  
			  $kayit = TicketManager::deleteTicket($id);
		
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel1.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  
	  else if(isset($_POST["gonderdate"]) && $_POST["gonderdate"]=="Update")	
		{
				
			$id=$_POST["id"];
			$date=$_POST["name"];
		
			
			
			$kayit = DateManager::updateDate($id,$date);
			
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel1.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gonderdate"]) && $_POST["gonderdate"]=="Delete")	
	  {
			  $id=$_POST["id"];
			  
			  $kayit = DateManager::deleteDate($id);
		
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel1.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  	  
	  else if(isset($_POST["gondervenue"]) && $_POST["gondervenue"]=="Update")	
		{
				
			$id=$_POST["id"];
			$vname=$_POST["vname"];
			$vaddress=$_POST["vaddress"];
			$vcapacity=$_POST["vcapacity"];
			$lid=$_POST["lid"];
			
			
			$kayit = VenueManager::updateVenue($id,$vname,$vaddress,$vcapacity,$lid);
			
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel2.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gondervenue"]) && $_POST["gondervenue"]=="Delete")	
	  {
			  $id=$_POST["id"];
			  
			  $kayit = VenueManager::deleteVenue($id);
		
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel2.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
		  
	
}
else{
	echo 'işlem geçersiz';
}
?>