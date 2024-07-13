<?php include 'header.php'; ?>
<div id="content">
<div class="container">
  <div class="row">
	<div class="col-md-3 sidebar">
	  <div class="section-menu">
		 <img src="img/misc/correos.png" alt="Location map"/>
	  </div>
	</div>
	<div class="col-md-9">
	  <h2 class="title-divider">
		<span><?php echo $site["contact"]["header_text"] ?></span>
		<small><?php echo $site["contact"]["header_text_body"] ?></small>
	  </h2>
	  <div class="row"><center>
	   <?php echo $site["contact"]["thankyou"] ?></center>
	  </div>
	</div>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>