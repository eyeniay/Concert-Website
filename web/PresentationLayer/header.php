
<?php
	session_start();
	$kullanici = null;
	$isadmin = null;
	
	if(isset($_SESSION['kullanici'])) {
		$kullanici =  $_SESSION['kullanici']["name"];
		$isadmin =  $_SESSION['kullanici']["isadmin"];
	}
?> 

<!DOCTYPE html>
<html>
<head>
<title>DEU CONCERT WEB SITE</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Music Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/modernizr.custom.97074.js"></script>
<!--script-->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>

</head>
<body>
<!--header-->
<div class="header header-main">
	<div class="container">
				<div class="header-top">
				<div class="logo">
					<h1><a href="../index.php">Concert</a></h1>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""> </span>
					<ul>
						<li ><a href="../index.php" class="hvr-sweep-to-bottom color"><i class="glyphicon glyphicon-home"></i>Home  </a> </li>
						<li ><a href="../PresentationLayer/album.php" class="hvr-sweep-to-bottom color1"><i class="glyphicon glyphicon-calendar"></i>Events  </a> </li>
						
						
						<?php 
							if(isset($kullanici)) {
								
								
								?>
								
								<li><a href='./UI.php?hello=true' class="hvr-sweep-to-bottom color3"> <i class="glyphicon glyphicon-tags"> </i><?php echo " ".$kullanici ?> </a></li>
								
								<?php 
							}
							else if($kullanici==null){
								?>
								<li><a href="../PresentationLayer/signup.php"  class="hvr-sweep-to-bottom color2"><i class="glyphicon glyphicon-envelope"></i>Sign Up</a></li>
								<li><a href="../PresentationLayer/login.php" class="hvr-sweep-to-bottom color3"><i class="glyphicon glyphicon-tags"></i>Login </a></li>
								
								<?php 
							}
							
							if(($isadmin)==1){
								
							?>
					
								<li><a href="../PresentationLayer/adminpanel.php" class="hvr-sweep-to-bottom color4"><i class="glyphicon glyphicon-picture"></i>AdminPanel </a></li>
							<?php 
							}
							
							?>
							
							<?php
  function runMyFunction() {
    $_SESSION['kullanici']=null;
									
									header("location:../index.php");
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>
						
						
					<div class="clearfix"> </div>
					</ul>
	<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>				
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
			
<!--//header-->
</body>
</html>