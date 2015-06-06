<?php  include "header.php"; ?>

	<section class="container-fluid remove-side-padding" id="main-container">
		<div class="container main-content">
			<section class="row">
				<section class="col-md-9">
					<div class="article-content">
						<h4><span class="text-orange">Contact Us</span></h4>
						<div class="article-section">
							<p>
								Complete the form below to request more information.
								<span style="display:block">Please complete all fields</span>
							</p>
							<form class="form-horizontal"> 
								<div class="col-md-6 col-sm-6 remove-side-padding">
									<div class="contact-form">
											<fieldset>
												<legend class="text-orange">Your Details:</legend>
												<p class="input-groups">
													<span>Your Name:</span>
													<input type="text" class="form-control">
												</p>
												<p class="input-groups">
													<span>Email Address:</span>
													<input type="email" class="form-control">
												</p>
												<p class="input-groups">
													<span>Phone No.:</span>
													<input type="text" class="form-control">
												</p>
												<p class="input-groups text-inquiry">
													<span class="text-orange">Enter your enquiry here:</span>
													<textarea class="form-control" rows="3"></textarea>
												</p>
												<p class="action-buttons">
													<input type="button" class="btn btn-danger" value="Clear">
													<input type="button" class="btn btn-primary" value="Submit">
												</p>
											</fieldset>
										<p>
											Calls may be recorded for training and monitoring purposes.
										</p>
									</div>							
								</div>
								<div class="col-md-6 remove-side-padding">
									<div class="location-info">
										<p class="text-dblue"><b>Head Office</b></p>
										<p>
											<span>Rapid Data Recovery</span>
											<span>100 Pall Mall</span>
											<span>St James</span>
											<span>London</span>
											<span>SW1Y 5NQ</span>
										</p>
										<p>
											<span><b class="text-dblue">Free Phone:</b> 0800 803 0828</span>
											<span><b class="text-dblue">Tel:</b> 0207 310 8839</span>
										</p>
										<p>
											<a href="mailto: enquiries@rapid-data.net">enquiries@rapid-data.net</a>
										</p>
										<p>
											<img src="img/london.jpg">
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>
				<?php include "form-sidebar.php" ?>
			</section>

<?php  include "footer.php"; ?>
