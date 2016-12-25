<?php


require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/UserManager.php");

if ($_POST){
	
	
	if(isset($_POST["gonder"]) && $_POST["gonder"]=="Update")	
		{
				
			$id=$_POST["id"];
			$name=$_POST["name"];
			$surname=$_POST["surname"];
			$mail=$_POST["mail"];
			$password=$_POST["password"];
			$question=$_POST["question"];
			$answer=$_POST["answer"];
			$isadmin=$_POST["isadmin"];
			
			$kayit = UserManager::updateUser($id,$name,$surname,$mail,$password,$question,$answer,$isadmin);
			
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
	  
	  else if(isset($_POST["gonder"]) && $_POST["gonder"]=="Delete")	
	  {
			  $id=$_POST["id"];
			  
			  $kayit = UserManager::deleteUser($id);
		
			if ($kayit){
				
				header("location:../PresentationLayer/adminpanel.php");
			}else{
				echo 'Güncelleme işlemi başarısız';
			}
	  }
		  
	  else if(isset($_POST["register"]) && $_POST["register"]=="Send")	
	  {
			
			$name=$_POST["name"];
			$surname=$_POST["surname"];
			$mail=$_POST["mail"];
			$password=$_POST["password"];
			$question=$_POST["question"];
			$answer=$_POST["answer"];
			$isadmin=0;
			
			$kayit = UserManager::insertNewUser($name, $surname, $mail, $password, $question, $answer, $isadmin);
			
			if ($kayit){
				
			session_start();
			$_SESSION['kullanici'] = array(
			"name"=>$name,
			"isadmin"=>$isadmin
			
			);
			
			header("location: ../index.php");
				
			}else{
				echo 'İşlem başarısız';
			}
	  }
	  
	  else if(isset($_POST["login"]) && $_POST["login"]=="Send")	
	  {
			
			$mail=$_POST["mail"];
			$password=$_POST["password"];
			
			
			$kayit = UserManager::loginControl($mail, $password);
			
			if ($kayit){
				
			session_start();
			$_SESSION['kullanici'] = array(
			"name"=>$kayit[0]->getName(),
			"isadmin"=>$kayit[0]->getIsuseradmin()
			
			);
			
			header("location: ../index.php");
				
			}else{
				header("location:../PresentationLayer/login.php");
			}
	  }
}
else{
	echo 'Yanlış yerlerde geziniyorsun';
}
?>