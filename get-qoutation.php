<?php  include "header.php"; ?>

	<section class="container-fluid remove-side-padding" id="main-container">
		<div class="container main-content">
			<section class="row">
				<section class="col-md-9">
					<div class="article-content">
						<h4><span class="text-orange">Get Quotation Now</span></h4>
						<div class="article-section">
							<form class="form-horizontal"> 
								<div class="col-md-6 col-sm-6 remove-side-padding">
									<div class="contact-form">
											<fieldset>
												<legend class="text-orange">Your Details</legend>
												<p class="input-groups">
													<span>Your Name</span>
													<input type="text" class="form-control">
												</p>
												<p class="input-groups">
													<span>Email Address</span>
													<input type="email" class="form-control">
												</p>
												<p class="input-groups">
													<span>Company</span>
													<input type="text" class="form-control">
												</p>
												<p class="input-groups">
													<span>Phone</span>
													<input type="text" class="form-control">
												</p>
											</fieldset>
									</div>							
								</div>
								<div class="col-md-6 remove-side-padding drive-detail-wrapper">
									<div class="contact-form">
											<fieldset>
												<legend class="text-orange">Drive Details</legend>
												<p class="input-groups">
													<span>OS</span>
													<select class="form-control">
														<option>-- Operating System --</option>
														<option>Windows</option>
														<option>Mac</option>
														<option>Linux</option>
													</select>
												</p>
												<p class="input-groups">
													<span>Media</span>
													<select class="form-control">
														<option>-- Select Drive Type --</option>
														<option>Hard Disk</option>
														<option>Pen Drive</option>
														<option>Flash Card</option>
													</select>
												</p>
												<p class="input-groups">
													<span>Size</span>
													<select class="form-control">
														<option>-- Select Drive Size --</option>
														<option value="< 1 GB">&lt; 1 GB</option>
														<option value="1 GB">1 GB</option>
														<option value="4 GB">4 GB</option>
														<option value="10 GB">10 GB</option>
														<option value="20 GB">20 GB</option>
														<option value="30 GB">30 GB</option>
														<option value="40 GB">40 GB</option>
														<option value="60 GB">60 GB</option>
														<option value="80 GB">80 GB</option>
														<option value="120 GB">120 GB</option>
														<option value="160 GB">160 GB</option>
														<option value="200 GB">200 GB</option>
														<option value="250 GB">250 GB</option>
														<option value="320 GB">320 GB</option>
														<option value="400 GB">400 GB</option>
														<option value="500 GB">500 GB</option>
														<option value="1 TB">1 TB </option>
														<option value="> 1 TB">&gt; 1 TB</option>														
													</select>
												</p>
											</fieldset>
									</div>								
								</div>
								<div class="col-md-12 remove-side-padding additional-info">
									<p class="input-groups text-inquiry add-text">
										<span class="text-orange">Additional Information</span>
										<p>Please describe in details the exact problem of the damaged media:</p>
										<textarea class="form-control add-info-ta" rows="3"></textarea>
									</p>
									<p class="action-buttons">
										<input type="button" class="btn btn-danger" value="Clear">
										<input type="button" class="btn btn-primary" value="Submit">
									</p>
									<p>
								</div>
							</form>
						</div>
					</div>
				</section>
				<?php include "form-sidebar.php" ?>
			</section>

<?php  include "footer.php"; ?>
