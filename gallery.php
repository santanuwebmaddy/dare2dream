<?php include 'header.php'; ?>

	<div class="page-banner" style="background-image: url('img/sub-banner.png');">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
          <h2>Gallery</h2>
          <ul class="list-inline">
          	<li><a href="index.php">Home</a></li>
          	<li><i class="las la-angle-right"></i></li>
          	<li>Gallery</li>
          </ul>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row popup-gallery">
	  	  <?php 
	  		for ($i=1; $i <=8 ; $i++) { 
	  			?>
					<div class="col-md-3 col-sm-6 col-xs-6 mt-30">
			      <div class="features">
			        <a href="img/gallery/gal<?php echo $i; ?>.jpg">
			        	<img src="img/gallery/gal<?php echo $i; ?>.jpg" style="width:100%">
			        </a>
			      </div>
			    </div>
	  			<?php
		  		}
		  	?>
			</div>
			<div class="row mt-50 hidden-xs"></div>
			<div class="row mt-30">
				<div class="col-md-12">
					<h2 class="title">Our Videos</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
		    	<div class="features3 mt-15 mb-15">
		        <a href="https://www.youtube.com/embed/n9rxh0JAF_0" data-lity>
		        	<img src="img/gallery/video.jpg" style="width:100%">
		        </a>
		      </div>
		    </div>
		    <div class="col-md-6">
		    	<div class="features3 mt-15 mb-15">
		        <a href="https://www.youtube.com/embed/n9rxh0JAF_0" data-lity>
		        	<img src="img/gallery/video.jpg" style="width:100%">
		        </a>
		      </div>
		    </div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>