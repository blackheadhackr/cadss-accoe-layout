<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-about">	
						<div class="brand-logo">
							<a href="index.php">
								<img class="img-responsive" src="img/accoet-logo.png" alt="Accoet India">
							</a>
						</div>
						<div class="about-description">
							<p>Accoet provides high quality IT training courses. Training is an important step in advancing your career and attaining professional goals. So, To help you make career ready with corporate requirements we will be nuturing you throughout.</p>
						</div>
						<div class="social-icons">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>								
							</ul>
						</div>
					</div>		
				</div>
				<div class="col-md-2">	
					<div class="quick-links">	
						<h4>Quick Links</h4>				
						<ul>
							<li>About Us</li>
							<li>Contact Us</li>
							<li>Terms & Condition</li>
							<li>Privacy Policy</li>							
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="courses">
						<h4>Courses</h4>
						<ul>
							<li>About Us</li>
							<li>Contact Us</li>
							<li>Terms & Condition</li>
							<li>Privacy Policy</li>	
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="contact">
						<h4>Get in Touch</h4>
						<ul>
							<li>
								<span><i class="fas fa-phone-alt"></i></span>
								<a href="tel:+911202555999">+91 1202 555 999</a>
							</li>
							<li>
								<span><i class="fas fa-envelope"></i></span>
								<a href="mailto:info@accoet.com">info@accoet.com</a>
							</li>
							<li>
								<span><i class="fas fa-map-marker-alt"></i></span>
								<p>3rd Floor, Bhavani Complex, Sector-27,Noida-201304.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>					
		</div>
	</div>
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copyright-content">								
						<p><a href="index.php">Accoet India</a> | All Rights Reserved © <span id="currentyear"></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Popup Model -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="popup-box">
					<!-- Modal -->
					<div class="modal fade" id="popup-form" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="popupForm">
						<div class="modal-dialog" role="document">
							<div class="modal-content clearfix">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
								<div class="modal-body row">
									<div class="col-sm-5 image">
										<img src="img/contact.jpg" class="contact">
									</div>
									<div class="col-sm-7 content">
										<h3 class="title">Get in Touch</h3>										
										<form action="#" method="post">
											<div class="form-row">
												<div class="col-md-12">
													<div class="form-group">															
														<input type="text" name="name" class="form-control" placeholder="Name">
													</div>
													<div class="form-group">															
														<input type="email" name="email" class="form-control" placeholder="Email">
													</div>
													<div class="form-group">															
														<input type="tel" name="phone" class="form-control" placeholder="Phone Number">
													</div>
													<div class="form-group">															
														<input type="text" name="subject" class="form-control" placeholder="Subject">
													</div>
													<button type="submit" class="btn">Submit</button>
												</div>													
											</div>												
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="whatsapp">
		<a href="https://api.whatsapp.com/send?phone=&amp;text=Hi, I have a query.&amp;" target="_blank" rel="noopener"> 
			<i class="fab fa-whatsapp"></i>
		</a>
	</div>
	<div class="fixed-contact-us" aria-hidden="false">
		<a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form">Enquiry</a>
	</div>
</footer>
<script>
	const d = new Date();
	var year = d.getFullYear();
	document.getElementById("currentyear").innerHTML = year;
</script>