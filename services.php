<?php include 'header.php'; ?>
<div id="content">
	<div class="container" id="about">
	  <div class="row">
		<div class="col-md-3 sidebar">
		  <div class="section-menu">
			<ul class="nav nav-list">
			  <li class="nav-header"><?php echo $site["services"]["this_section"] ?></li>
			  <li class="active">
				<a href="#" class="first">
				  <?php echo $site["services"]["our_services"] ?>
				</a>
			  </li>
			  <li>
				<a href="#fabrica">
				  <?php echo $site["services"]["software_factory"] ?>
				</a>
			  </li>
			  <li>
				<a href="#consultores">
				   <?php echo $site["services"]["expert_consultants"] ?>
				</a>
			  </li>
			  <li>
				<a href="#areas">
				  <?php echo $site["services"]["areas_consultancy"] ?>
				</a>
			  </li>
			</ul>
		  </div>
		</div>
		<div class="col-md-9">
		  <h2 class="title-divider">
			<span><?php echo $site["services"]["header_text"] ?></span>
			<small><?php echo $site["services"]["header_text_body"] ?></small>
		  </h2>
		  <div class="title-divider" id="stats">
			<h3>
			  <span><?php echo $site["services"]["software_factory"] ?></span>
			</h3>
		  </div>
		  <span><?php echo $site["services"]["software_factory_text"] ?></span>
		  <div class="title-divider" id="stats">
			<h3>
			  <span><?php echo $site["services"]["expert_consultants"] ?></span>
			</h3>
		  </div>
		  <span><?php echo $site["services"]["expert_consultants_text"] ?></span>
		  <div class="title-divider" id="stats">
			<h3>
			  <span><?php echo $site["services"]["areas_consultancy"] ?></span>
			</h3>
			</div>
			<span><?php echo $site["services"]["areas_consultancy_text"] ?></span>
		</div>
	  </div>
	</div>
</div>
<?php include 'footer.php'; ?>