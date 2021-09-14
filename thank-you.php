<?php include 'header.php'; ?>

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="title-lg">THANK YOU</h2>
					<h3>For participating in the contest</h3>
					<br>
					<p>
						<big>
							You can upload two pictures and one video now. <br> Or <br>
						You can upload it later by clicking on the STATUS button in the menu.
						</big>
					</p>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-md-6 col-md-offset-3">
					<form>
						<div class="row">
							<div class="col-md-12">
								<h4 style="margin-top:15px">Upload Your Photos</h4>
								<div class="form-group">
									<p style="margin-bottom:0px">Close Up</p>
							    <input type="file" id="exampleInputFile">
							    <p class="help-block">* Image size should be less than 5MB</p>
							  </div>
							  <div class="form-group">
									<p style="margin-bottom:0px">Full Length:</p>
							    <input type="file" id="exampleInputFile">
							    <p class="help-block">* Image size should be less than 5MB</p>
							  </div>
							</div>
							<div class="col-md-12">
								<h4 style="margin-top:15px">Upload Your Video</h4>
								<div class="form-group">
							    <input type="file" id="exampleInputFile">
							    <p class="help-block"><!-- * Image size should be less than 5MB --></p>
							  </div>
							</div>
							<div class="col-md-6 mt-15" style="margin-top:5px">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		.section-action{
			display: none;
		}
		.section {
	    padding-top: 80px;
	    padding-bottom: 80px;
	  }
	  .section-action{
			display: none;
		}
		label {
	    color: #b38921 !important;
    }
    form{
    	padding: 20px 35px;
      border: 1px solid #e2d4b2;
    }
    .form-control {
	    height: 42px;
	    font-size: 15px;
	  }
	  @media only screen and (max-width: 768px){
	  	form{
		    padding: 30px 20px;
		    border: 1px solid #e2d4b2;
		  }
	  }
	</style>
	<?php include 'footer.php'; ?>