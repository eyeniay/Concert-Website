
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/TypeManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/OrganizationManager.php");

$id="empty";
if(isset($_GET["id"]))
$id=$_GET["id"];


require_once($_SERVER['DOCUMENT_ROOT']."/web/PresentationLayer/header.php");
?>


        <div class="col-md-3">
					<div class="grid-categories">
						<div class="cate-top">
						<h4>CATEGORIES</h4>
						<ul class="popular">
						
						   <?php
				$allType=TypeManager::getAllType();
				
				for($i=0; $i <count($allType); $i++){

							$TypeCount=TypeManager::getTypeCount($allType[$i]->getTYid());
						?>
						
						<li><a href="../PresentationLayer/album.php?id=<?php echo $allType[$i]->getTYid() ?>"><i class="glyphicon glyphicon-chevron-right"> </i><?php echo $allType[$i]->getTYname()." (".$TypeCount.")" ?></a></li>
							
						
						<?php
						}
						?>
							
						
						</ul>
					</div>
					
				</div>
				</div>


<!--gallery-->



	<div class="gallery">
		<div class="container">
			<h3>Events</h3>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					
					
					
					<?php
				if(isset($id)) {   // only selected events
				$allEvents=OrganizationManager::getAllEventbyid($id);
			
				
				for($i=0; $i <count($allEvents); $i++){

						?>
						
						
						<li>
						 
						<a href="../PresentationLayer/EventPage.php?id=<?php echo $allEvents[$i]->getOid() ?>" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a4.jpg" alt=""/>
							
							<div>
								<h5><?php echo $allEvents[$i]->getOname() ?> </h5>
								<span><?php echo $allEvents[$i]->getOperformer_name() ?> </span>
								
							</div>
							
						</a>
					</li>
					
						
						
						
						
						<?php
						}
				}
				
				if($id == "empty") {   // all events
				$allEvents=OrganizationManager::getAllEvents();
			
				
				for($i=0; $i <count($allEvents); $i++){
                        
						?>
						
						
						<li>
						<a href="../PresentationLayer/EventPage.php?id=<?php echo $allEvents[$i]->getOid() ?>" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a4.jpg" alt="" />
							<div>
								<h5><?php echo $allEvents[$i]->getOname() ?> </h5>
								<span><?php echo $allEvents[$i]->getOperformer_name() ?> </span>
								
							</div>
						</a>
					</li>
					
						
						
						
						
						<?php
						}
				}
					   ?>
					
					
					<div class="clearfix"> </div>
				</ul>
			</section>
			<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
        </div>
		
	</div>
<!--//gallery-->



<!--footer-->
<?php
   include( "footer.php" );
   ?>
<!--//footer-->
</body>
</html>