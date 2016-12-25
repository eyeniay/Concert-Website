<?php require_once($_SERVER['DOCUMENT_ROOT']."/web/PresentationLayer/header.php"); ?>
			
			<div class="contact">
				<div class="container">
					<div class="contact-top ">
						<h3>Sign Up</h3>
					</div>		
		
					<div class="contact-grids">
						<div class="contact-form">
							<form action="../LogicLayer/usercontrol.php" method="POST"> 
								<div class="contact-bottom">
									<div class="col-md-4 in-contact">
										<span>Name :</span>
										<input type="text" name="name" class="text" value="">
									</div>
									<div class="col-md-4 in-contact">
										<span>Surname :</span>
										<input type="text" name="surname" class="text" value="">
									</div>
									<div class="col-md-4 in-contact">
										<span>Mail :</span>
										<input type="text" name="mail" class="text" value="">
									</div>
									
									
									<div class="col-md-4 in-contact">
										<span>Password :</span>
										<input type="text" name="password" class="text" value="">
									</div>
									<div class="col-md-4 in-contact">
										<span>Reminder Question :</span>
										<input type="text" name="question" class="text" value="">
									</div>
									<div class="col-md-4 in-contact">
										<span>Reminder Answer :</span>
										<input type="text" name="answer" class="text" value="">
									</div>
									
								<input type="submit" name="register" value="Send">
							</form>
						</div>
						<div class="address">
					
					
					<div class="col-md-4 address-more">
						<h4>Address</h4>
						<div class="address-grid">
							<i class="glyphicon glyphicon-globe"></i>
							<div class="address1">
								<p>Lorem ipsum dolor</p>
								<p>TL 19034-88974</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid grid-address">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
								<p>+885699655</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						</div>
							<div class="col-md-8 map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12512.500668502624!2d27.2097306!3d38.3692258!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x22aca51dc55ea9d1!2zRG9rdXogRXlsw7xsIMOcbml2ZXJzaXRlc2kgQmlsZ2lzYXlhciBNw7xoZW5kaXNsacSfaSBCw7Zsw7xtw7w!5e0!3m2!1str!2str!4v1482268854417" allowfullscreen=""></iframe>							
						</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
<!--//content-->

<!--footer-->
<?php
   include( "footer.php" );
   ?>
<!--//footer-->
</body>
</html>