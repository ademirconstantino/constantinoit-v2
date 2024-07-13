<div class="container" style="background-color: #F0F0F0">
<br/>
  <div class="row">
	<div class="col-md-3 col">
	  <div class="block contact-block">
		<address>
		  <ul class="fa-ul">
			<li>
			  <abbr title="Phone"><i class="fa fa-li fa-phone"></i></abbr>
				<?php echo $site["footer"]["telephone_number"] ?>
			</li>
			<li>
			  <abbr title="Email"><i class="fa fa-li fa-envelope"></i></abbr>
			  <a href="contact.php?lang=<?php echo $lang ?>" style="text-decoration:none; color: black"><?php echo $site["footer"]["contact_us"] ?></a>
			</li>
			<li>
			  <abbr title="Address"><i class="fa fa-li fa-home"></i></abbr>
			   <?php echo $site["footer"]["address"] ?>
			</li>
		  </ul>
		</address>
	  </div>
	</div>
  </div>
  <div class="row">
	<div class="subfooter">
	  <div class="col-md-6">
		<p><?php echo $site["footer"]["copyright_notice"] ?></p>
	  </div>
	  <div align="right" style="padding-right: 20px;">
			  <div>
				<a href="<?php echo $site["links"]["twitter_link"] ?>"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $site["links"]["facebook_link"] ?>"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $site["links"]["linkedin_link"] ?>"><i class="fa fa-linkedin"></i></a>
			  </div>
	  </div>
	</div>
	</div>
  </div>
	  <script src="js/jquery.min.js"></script>
	  <script src="js/jquery-migrate-1.2.1.min.js"></script>      
	  <script src="js/bootstrap.min.js"></script>      
	  <script src="js/script.min.js"></script>
	</body>
	<br/>
	<br/>
</html>