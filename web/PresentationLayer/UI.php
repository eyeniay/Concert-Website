<?php
require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/TypeManager.php");
?>

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
<link href="./PresentationLayer/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./PresentationLayer/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="./PresentationLayer/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Concert Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>



<div class="header">
	<div class="container">
			<div class="header-top">
			<div class="logo">
					<h1><a href="./index.php">Concert</a></h1>
				</div>
				<div class="top-nav">
			<span class="menu"><img src="./PresentationLayer/images/menu.png" alt=""> </span>
					<ul>
						<li ><a href="./index.php" class="hvr-sweep-to-bottom color"><i class="glyphicon glyphicon-home"></i>Home  </a> </li>
						<li ><a href="./PresentationLayer/album.php" class="hvr-sweep-to-bottom color1"><i class="glyphicon glyphicon-calendar"></i>Events  </a> </li>
						
						
				
						<?php 
							if(isset($kullanici)) {
								
								
								?>
								
								<li><a href='./PresentationLayer/UI.php?hello=true' class="hvr-sweep-to-bottom color3"> <i class="glyphicon glyphicon-tags"> </i><?php echo " ".$kullanici ?> </a></li>
								
								<?php 
							}
							else if($kullanici==null){
								?>
								<li><a href="./PresentationLayer/signup.php"  class="hvr-sweep-to-bottom color2"><i class="glyphicon glyphicon-envelope"></i>Sign Up</a></li>
								<li><a href="./PresentationLayer/login.php" class="hvr-sweep-to-bottom color3"><i class="glyphicon glyphicon-tags"></i>Login </a></li>
								
								<?php 
							}
							
							if(($isadmin)==1){
								
							?>
					
								<li><a href="./PresentationLayer/adminpanel.php" class="hvr-sweep-to-bottom color4"><i class="glyphicon glyphicon-picture"></i>AdminPanel </a></li>
							<?php 
							}
							
							?>
							
							<?php
  function runMyFunction() {
    $_SESSION['kullanici']=null;
									
									header("location: ../index.php");
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>
						
						
					<div class="clearfix"> </div>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>	
			</div>
			</div>
			<div class="clearfix"> </div>
			
			<div class="banner-main">
	  <section class="slider">
           <div class="flexslider">
             <ul class="slides">
				   <li>
				   	<div class="banner-matter">
					   	<h3>Consectetur adipisicing elit</h3>
					   	<p>Brings people together through live experiences. Discover events that match your passions and buy ticket with online ticketing tools</p>
				  	</div>
				   </li>
				    <li>
				   	<div class="banner-matter">
					   	<h3>Consectetur adipisicing elit</h3>
					   	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>				  	</div>
				   </li>
				    <li>
				   	<div class="banner-matter">
					   	<h3>Consectetur adipisicing elit</h3>
					   	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>				  	</div>
				   </li>
          </ul>
        </div>
      </section>

	</div>

<!--FlexSlider-->
	<link rel="stylesheet" href="./PresentationLayer/css/flexslider.css" type="text/css" media="screen" />
	<script defer src="./PresentationLayer/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

	</div>
</div>

<!--content-->
<div class="content">
	<div class="container">
		<!--content-top-->
		<div class="content-top">
			<div class="col-md-7 content-top1">
				<h3>Welcome</h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
					, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose,
					
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to</p>
			</div>
			<div class="col-md-5 top-col">
				<div class="col1">
					<div class="col-md-6 col2">
						<img src="./PresentationLayer/images/ic.png" alt="" >
					</div>
					<div class="col-md-6 col3">
						<img src="./PresentationLayer/images/ic1.png" alt="" >
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col1">
					<div class="col-md-6 col4">
						<img src="./PresentationLayer/images/ic2.png" alt="" >
					</div>
					<div class="col-md-6 col5">
						<img src="./PresentationLayer/images/ic3.png" alt="" >
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//content-top-->
		<!--content-mid-->
		
			
		
		<div class="content-mid">
		
		<?php
				$allType=TypeManager::getAllType();
				
				for($i=0; $i <count($allType); $i++){

						?>
						
						<div class="col-md-4 mid">
				       <a href="./PresentationLayer/album.php?id=<?php echo $allType[$i]->getTYid() ?>"><img src="./PresentationLayer/images/<?php echo $allType[$i]->getTYid() ?>.jpg" alt="" class="img-responsive">
				      <div class="mid1">
					  
				     	<h4><?php echo $allType[$i]->getTYname() ?></h4>
					   <i class="glyphicon glyphicon-circle-arrow-right"></i>
					   <div class="clearfix"> </div>
					   
				     </div>
					 <br></br>
				    </a>
			     </div>
						
				<?php		
			}
			?>
			
		</div>
		<!--content-mid-->
	</div>
	<div class="content-middle">
		<div class="container">
		<div class="content-mid-top">
					<h3> Team</h3>
				</div>
				<div class="news">
					<div class="col-md-6 new-more">
						<div class=" new-more1">
						<div class="col-md-2 six">						
							<img class="img-responsive" src="./PresentationLayer/images/etom.jpg" alt="">
						</div>
						<div class="col-md-10 six1">
							<h5>Ethem Yeniay</h5>
							<p>1994 yılının ekim ayında doğan Ethem Yeniay , eğitim ve öğretim hayatına İstanbul'da başladı. Lise hayatını Fahreddin Kerim Gökay Anadolu Lisesinde okuduktan sonra şu anki eğitimini Dokuz Eylül Üniversitesinde sürdürmektedir.</p>
						
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
						<div class="col-md-6 new-more">
						<div class=" new-more1">
						<div class="col-md-2 six">
							<img class="img-responsive" src="./PresentationLayer/images/ogu.jpg" alt="">
						</div>
						<div class="col-md-10 six1">
							<h5>Oğulcan Keskin</h5>
							<p>1993 yılının nisan ayında doğan Ogulcan  Keskin , eğitim ve öğretim hayatına Çorlu'da başladı. Lise hayatını Gaziemir Anadolu Lisesinde okuduktan sonra şu anki eğitimini Dokuz Eylül Üniversitesinde sürdürmektedir.<br><br></p>
							</div>
						<div class="clearfix"> </div>
					</div>
					</div>
					<div class="clearfix"> </div>
				</div>

				
			</div>
	</div>
	<!---->
	<div class="content-bottom">
		<div class="container">
			<div class="content-bottom-top">
				<div class="col-md-6 content-bottom-top1">
					<h3>Kasertas lertyasea deeraeser</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
				</div>
				<div class="col-md-6 bottom-co1">
					<img class="img-responsive" src="./PresentationLayer/images/a1.jpg" alt="">

				</div>
			</div>
		</div>
	</div>
	<!---->
</div>
<!--//content-->

<!--footer-->
<html>
<div class="footer">
	<div class="container">
		<h2><a href="./index.php"> Concert</a></h2>
		
					<ul>
						<li ><a href="./index.php" >Home  </a> </li>
						<li ><a href="./PresentationLayer/album.php" >Events  </a> </li>
						
						<div class="clearfix"> </div>
					</ul>
					<p > © 2016 Concert All rights reserved </p>
	</div>
</div>
</html>
<!--//footer-->
</body>
</html>