<?php


require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/OrganizationManager.php");

if ($_POST){
	
	
	if(isset($_POST["gonder"]) && $_POST["gonder"]=="Update")	
		{
				
			$id=$_POST["id"];
			$oname=$_POST["oname"];
			$pname=$_POST["pname"];
			$vid=$_POST["vid"];
			$did=$_POST["did"];
			$tid=$_POST["tid"];
			$gid=$_POST["gid"];
			$tnumber=$_POST["tnumber"];
			
			$kayit = OrganizationManager::updateOrganization($id,$oname,$pname,$vid,$did,$tid,$gid,$tnumber);
			
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gonder"]) && $_POST["gonder"]=="Delete")	
	  {
			  $id=$_POST["id"];
			  
			  $kayit = OrganizationManager::deleteOrganization($id);
		
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
		  
	
}
else{
	echo 'Yanlış yerlerde geziniyosun';
}
?>