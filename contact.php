<?php include 'header.php'; ?>
<div id="content">
<div class="container">
  <div class="row">
	<div class="col-md-3 sidebar">
	  <div class="section-menu">
		 <img src="img/misc/correos.png"/>
	  </div>
	</div>
	<div class="col-md-9">
	  <h2 class="title-divider">
		<span><?php echo $site["contact"]["header_text"] ?></span>
		<small><?php echo $site["contact"]["header_text_body"] ?></small>
	  </h2>
	  <div class="row">
		<div class="col-md-6">
		  <form id="contact-form" action="contact2.php?lang=<?php echo $lang?>" method="POST">
			<div class="form-group">
			  <label class="sr-only" for="nome"><?php echo $site["contact"]["name"] ?></label>
			  <input type="text" name="nome" class="form-control" id="nome" placeholder="<?php echo $site["contact"]["name"] ?>">
			</div>
			<div class="form-group">
			  <label class="sr-only" for="email"><?php echo $site["contact"]["email"] ?></label>
			  <input type="email" name="email" class="form-control" id="email" placeholder="<?php echo $site["contact"]["email"] ?>">
			</div>
			<div class="form-group">
			  <label class="sr-only" for="mensagem"><?php echo $site["contact"]["message"] ?></label>
			  <textarea rows="12" class="form-control" name="mensagem" id="mensagem" placeholder="<?php echo $site["contact"]["message"] ?>"></textarea>
			</div>
			<input type="submit" class="btn btn-primary" value="<?php echo $site["contact"]["send_message"] ?>">
		  </form>
		</div>
		<div class="col-md-6">
		  <p>
			<abbr title="Phone"><i class="fa fa-phone"></i></abbr>
			<?php echo $site["contact"]["telephone"] ?>
		  </p>
		  <p>
			<abbr title="Email"><i class="fa fa-envelope"></i></abbr>
			<a href="mailto:ademir@constantinoit.it"><?php echo $site["contact"]["send_us_mail"] ?></a>
		  </p>
		  <p>
			<abbr title="Address"><i class="fa fa-home"></i></abbr>
			<?php echo $site["contact"]["location"] ?>
		  </p>
		</div>
	  </div>
	</div>
  </div>
</div>
<?php include 'footer.php'; ?>