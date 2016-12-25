<?php	

require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/UserManager.php");
				
?>
				
<!DOCTYPE html>
  <html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    
    <link rel="stylesheet" href="css/reset.css">

    
        <link rel="stylesheet" href="css/style2.css">

     <link rel="stylesheet" href="css/style1.css">
    
  
  </head>

  <body>

    <section> <!--for demo wrap-->
<h1>Admin Panel</h1>  
<h1><button onclick="window.location.href='../index.php'">Home Page</button></h1>
<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      <th>Name</th>
      <th>Surname</th>
      <th>Mail</th>
	   <th>Password</th>
      <th>Question</th>
      <th>Answer</th>
	   <th>IsAdmin</th>
     
     
      <th></th>
	    <th></th>
      
    </tr>
  </thead>
</table>
</div>
<div  class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
  <?php	
if ($_POST){//Post ile değer gelmişse yani listeleme alanında kaydın yanındaki "Güncelle" ye tıklandıysa


   
	if(isset($_POST["id"]))
	$id=$_POST["id"];//Hidden elementinden gelen id bilgisi


	
	
	if($_POST["gonder"]=="Update")
	{
		
	$userList = UserManager::getSpecificUser($id);
	for($i = 0; $i < count($userList); $i++) {
	echo'<form name="form1" method="post" action="../LogicLayer/usercontrol.php">';
	echo '<tr>';
	echo '<td><input type="text" name="name" value="'.$userList[$i]->getName().'"/></td>';
	echo '<td><input type="text" name="surname" value="'.$userList[$i]->getSurname().'"/></td>';
	echo '<td><input type="text" name="mail" value="'.$userList[$i]->getMail().'"/></td>';
	echo '<td><input type="text" name="password" value="'.$userList[$i]->getPassword().'"/></td>';
	echo '<td><input type="text" name="question" value="'.$userList[$i]->getQuestion().'"/></td>';
	echo '<td><input type="text" name="answer" value="'.$userList[$i]->getAnswer().'"/></td>';
	echo '<td><input type="text" name="isadmin" value="'.$userList[$i]->getIsuseradmin().'"/></td>';
	
	
	
	echo '<td><input type="submit" name="gonder" value="Update"/></td>';
	echo '<td><input type="hidden" name="id" value="'.$userList[$i]->getID().'"/></td>';
		
		echo'</tr>';
		echo '</form>';
		
	}
	}
	
	else if($_POST["gonder"]=="Delete")
	{

	echo'<form name="form1" id="delete" method="post" action="../LogicLayer/usercontrol.php">';
	echo '<input type="hidden" name="gonder" value="Delete"/>';
	echo '<input type="hidden" name="id" value="'.$id.'"/>';
	echo '</form>';
	?>
	<script type="text/javascript">
    document.getElementById('delete').submit(); // SUBMIT FORM
    </script>
	
	<?php
	}
	
	else if($_POST["gonder"]=="Insert")
	{
		$name = trim($_POST["name"]);
		$surname = trim($_POST["surname"]);
		$mail = trim($_POST["mail"]);
		$password = trim($_POST["password"]);
		$question = trim($_POST["question"]);
		$answer = trim($_POST["answer"]);
		$isadmin = trim($_POST["isadmin"]);
		
		
		
		$errorMeesage = "";
		$result = UserManager::insertNewUser($name, $surname, $mail, $password, $question, $answer, $isadmin);
		if(!$result) {
			$errorMeesage = "Yeni kullanıcı kaydı başarısız!";
		}
		else{
				header("location: ./adminpanel.php");
		}
	
	
	
	}
	
	
}

else{//Başlangıçta Kayıtlar Listeleniyor
		$userList = UserManager::getAllUsers();
	for($i = 0; $i < count($userList); $i++) {
						
	
		?><form action="<?php $_PHP_SELF ?>" method="POST"><?php
		echo '<tr>';
		echo '<td>'.$userList[$i]->getName().'</td>';
		echo '<td>'.$userList[$i]->getSurname().'</td>';
		echo '<td>'.$userList[$i]->getMail().'</td>';
		echo '<td>'.$userList[$i]->getPassword().'</td>';
		echo '<td>'.$userList[$i]->getQuestion().'</td>';
		echo '<td>'.$userList[$i]->getAnswer().'</td>';
		echo '<td>'.$userList[$i]->getIsuseradmin().'</td>';
		
		echo '<td><input type="submit" name="gonder" value="Update"/></td>';
			echo '<td><input type="submit" name="gonder" value="Delete"/></td>';
		echo '<input type="hidden" name="id" value="'.$userList[$i]->getID().'"/>';
		
		echo '</tr>';
		echo '</form>';
	}
	


?>

<?php

echo '<form action="./adminpanel.php" method="post" name="form2">';
echo '<tr>';
echo '<td>';
	echo '					<input type="text" name="name" />';
		echo '			</td>';
		echo '			<td>';
			echo '			<input type="text" name="surname"  />';
				echo '	</td>';
				echo '	<td>';
					echo '	<input type="text" name="mail" />';
				echo '	</td>';
				echo '	<td>';
					echo '	<input type="text" name="password" />';
				echo '	</td>';
				echo '	<td>';
					echo '	<input type="text" name="question" />';
				echo '	</td>';
				echo '	<td>';
					echo '	<input type="text" name="answer" />';
				echo '	</td>';
				echo '	<td>';
					echo '	<input type="text" name="isadmin" />';
				echo '	</td>';
				echo '<td><input type="submit" name="gonder" value="Insert"/></td>';
echo '</tr>';
echo'</form>';
}?>
  </tbody>
</table>
</div>
</section>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
