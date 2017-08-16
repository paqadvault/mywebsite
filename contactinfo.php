<?php include('private/shared/header.php');?>

	<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">Get In Touch</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row row-pb-md">
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="index.php">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input type="text" id="name" class="form-control" placeholder="Your firstname" name='name'>
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="email" id="email" class="form-control" placeholder="Your email address" name="email">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">phone</label>
								<input type="text" id="email" class="form-control" placeholder="Your mobile number" name="phone">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Subject</label>
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message" name="sub">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something" name="message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary btn-lg">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Ajayi Aina Street Gbagada <br> Lagos Nigeria,</li>
							<li class="phone"><a href="tel://+2348130292787">+234 813 0292 787</a></li>
							<li class="email"><a href="mailto:info@paqadvault.com">info@paqadvault.com</a></li>
							<li class="url"><a href="http://www.paqadvault.com">PaqadVault.com</a></li>
						</ul>
					</div>


				</div>
			</div>
			</div>
			
		</div>
	</div>

		<?php include('private/shared/subscribe.php');?>

		<?php include('private/shared/footer.php');?>