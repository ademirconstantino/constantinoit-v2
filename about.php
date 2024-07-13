<?php include 'header.php'; ?>	  
<div id="content">
<div class="container" id="about">
  <div class="row">
	<div class="col-md-3 sidebar">
	  <div class="section-menu">
		<ul class="nav nav-list">
		  <li class="nav-header"><?php echo $site["about"]["this_section"] ?></li>
		  <li class="active">
			<a href="#" class="first">
			  <?php echo $site["about"]["about_us"] ?>
			</a>
		  </li>
		  <li>
			<a href="#mission">
			 <?php echo $site["about"]["mission"] ?>
			</a>
		  </li>
		  <li>
			<a href="#businessinsight">
			   <?php echo $site["about"]["business_insight"] ?>
			</a>
		  </li>
		  <li>
			<a href="#ourvalues">
			  <?php echo $site["about"]["our_values"] ?>
			</a>
		  </li>
		</ul>
	  </div>
	</div>
	<div class="col-md-9">
	  <h2 class="title-divider">
		<span><?php echo $site["about"]["text_about_cit"] ?></span>
		<small><?php echo $site["about"]["text_about_cit_body"] ?></small>
	  </h2>

	  <h4>
		<?php echo $site["about"]["experience"] ?>
	  </h4>
	  <p align="justify"><?php echo $site["about"]["company_details"] ?></p>  
	  <div class="title-divider" id="stats">
		<h3>
		  <span><?php echo $site["about"]["mission"] ?></span>
		</h3>
	  </div>
		   <span><?php echo $site["about"]["mission_text"] ?></span>
	  
	  <div class="title-divider" id="stats">
		<h3>
		  <span><?php echo $site["about"]["business_insight"] ?></span>
		</h3>
	  </div>
	  <span><?php echo $site["about"]["business_insight_text"] ?></span>
	  
	  <div class="title-divider" id="stats">
		<h3>
		  <span><?php echo $site["about"]["our_values"] ?></span>
		</h3>
	   </div>
	   <?php echo $site["about"]["our_values_text"] ?>
	</div>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>