
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/web/LogicLayer/OrganizationManager.php");
$id=$_GET["id"];
?>


<?php
require_once($_SERVER['DOCUMENT_ROOT']."/web/PresentationLayer/header.php");  ?> 


   <?php $allEventsbyOid=OrganizationManager::getOrganizationbyID($id); ?>
   
	<div class="blog">
		<div class="container">
				<div class="col-md-9">
					<div class="blog-grid">
					<img class="img-responsive" src="images/b1.jpg" alt="" />
					<div class="lone-line">
						<h4><?php echo $allEventsbyOid[0]->getOname() ?></h4>
						<ul class="grid-blog">
							<li><span><i class="glyphicon glyphicon-time"> </i><?php echo $allEventsbyOid[0]->getDday() ?></span></li>
							<li><i class="glyphicon glyphicon-share"> </i><?php echo $allEventsbyOid[0]->getLname() ?></li>
							<li><i class="glyphicon glyphicon-comment"> </i>2 Comment</li>
							
						</ul>
						<p>Sevilen sanatçı <font face="tahoma" size="4" color="maroon">  <?php echo $allEventsbyOid[0]->getOperformer_name() ?> </font>,<font face="tahoma" size="4" color="maroon">  <?php echo $allEventsbyOid[0]->getDday() ?></font> tarihinde sevenleriyle <font face="tahoma" size="4" color="maroon">  <?php echo $allEventsbyOid[0]->getLname() ?> <?php echo $allEventsbyOid[0]->getVname() ?> </font> mekanında buluşuyor.Ücretin <font face="tahoma" size="4" color="maroon">  <?php echo $allEventsbyOid[0]->getTprice() ?> </font> TL olduğu konsere katılım için Buy Ticket butonunu kullanabilirsiniz<br></p>
						<?php  if($kullanici==null){
							?><button onclick="window.location.href='./login.php'">BUY TICKET</button>
						<?php }
						
							else {
							?>
							<button onclick="window.location.href='../json.php?mail=<?php echo $kullanici?>&id=<?php echo  $id?>'"">BUY TICKET</button> <?php } ?>
						
					
					<div class="comment-top">
				<div class="story">
					<h4 >comments (2)</h4>
				</div>
				<!---->
				<div class="comments-top-top">
					<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
					</div>
					<div class="top-comment-right">
						<div class="right-comment">
							<h5>Perfect concert</h5>
							<span>05/03/2012 at 13:58</span>
							<div class="clearfix"> </div>
						</div>
						<p>Remaining essentially unchanged </p>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="comments-top-top">
					<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
					</div>
					<div class="top-comment-right">
						<div class="right-comment">
							<h5>like it</h5>
							<span>05/03/2012 at 13:58</span>
							<div class="clearfix"> </div>
						</div>
						<p>It was popularised in the 1960s with the release of  Letraset sheets containing </p>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
			
			</div>
					</div>
				</div>
				
			<div class="clearfix"> </div>
			
		</div>
	</div>


<!--footer-->
<?php
   include( "footer.php" );
   ?>
<!--//footer-->
</body>
</html>