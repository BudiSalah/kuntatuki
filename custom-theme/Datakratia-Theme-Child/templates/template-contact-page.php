<?php
/**
 * Template Name: SC Contact Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<?php
    get_header();
?>

<main id="site-content" class="contact-main" role="main">
	<section id="hero" class="container">
		<div class="row flex-column-reverse flex-md-row">
			<div class="col-12 col-md-5">
				<div class="inner-row">
					<h2 class="title-heading">Feel free to contact us</h2>

					<hr>

					<div class="row sc_ifu-section">
						<div class="col">
							<h4>Jos sinulla on kysyttää tai haluat varata demo -ajan, niin voit soittaa alla olevaan
							numeroon:</h4>
							<h2 class="darkblue-color-text">+358 50 591 2746</h2>
						</div>
						<div class="col-3 row custom-images-icons-wrapper">
							<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/phone-icon.png"
								class="img-fluid col" alt="Responsive image">
							<img src="https://demo10.demosaitti.com/wp-content/uploads/2020/09/avada-movers-johnsmith-final.jpg"
								class="img-fluid col" alt="Responsive image">
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-7 custom-padding-left">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/finance2-subheader-pic1.jpg" class="img-fluid"
					alt="Responsive image">
			</div>
		</div>
	</section>

	<section id="how-it-can-help" class="container">
		<h1 class="mb-4 mb-lg-0">There are several ways to contact us:</h1>

		<div id="help-steps" class="row">
			<div class="col-12 col-sm-6 col-md-3 mb-5 mb-md-0 step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/contact-icon1.png" class="img-fluid step-icon" alt="Responsive image">
				<h3 class="step-title mb-4">Address</h3>
				<p class="step-head mb-4">Level 13, 2 Elizabeth St, Melbourne, Victoria 3000, Australia</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3 mb-5 mb-md-0 step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/contact-icon2.png" class="img-fluid step-icon" alt="Responsive image">
				<h3 class="step-title mb-4">Consultant</h3>
				<p class="step-head mb-4">Kevin Perry</p>
				<p class="step-text">+61 (0) 383 766 284 noreply@envato.com</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3 mb-5 mb-md-0 step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/contact-icon3.png" class="img-fluid step-icon" alt="Responsive image">
				<h3 class="step-title mb-4">E-mail</h3>
				<p class="step-head mb-4">noreply@envato.com</p>
				<p class="step-text">liquam erat ac ipsum. Integer aliquam purus luctus.</p>
			</div>
			<div class="col-12 col-sm-6 col-md-3 mb-5 mb-md-0 step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/contact-icon4.png" class="img-fluid step-icon" alt="Responsive image">
				<h3 class="step-title mb-4">Phone</h3>
				<p class="step-head mb-4">+61 (0) 383 766 284</p>
				<p class="step-text">Lorem ipsum dolor sit amet, consectetur dapibus.</p>
			</div>
		</div>
	</section>

	<section id="form-section" class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="section-title">
					<ion-icon name="mail"></ion-icon>
					<h4>Contact form</h4>
				</div>

				<h2 class="headline">Send a request</h2>
				<p class="location-text">Level 13, 2 Elizabeth St, Melbourne, Victoria 3000, Australia</p>
			</div>

			<div class="col-12 col-md-6">
				<form action="" method="POST">
					<div class="form-group message-type">
						<div class="form-check form-check-inline mx-4">
							<input class="form-check-input" type="radio" name="self-company-radio" id="self-employed" value="self-employed">
							<label class="form-check-label" for="self-employed">Self-employed</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="self-company-radio" id="company" value="company">
							<label class="form-check-label" for="company">Company</label>
						</div>
					</div>

					<div class="form-group row">
						<div class="col pr-0 mr-2">
						  <input type="text" class="form-control" placeholder="Your name">
						</div>
						<div class="col pl-0 ml-2">
						  <input type="text" class="form-control" placeholder="Your e-mail">
						</div>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Subjuct">
					</div>

					<div class="form-group">
						<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Describe your problem"></textarea>
					</div>

					<div class="center-btn-wrapper">
						<button type="submit" class="btn btn-primary ocean">Send a message</button>
					</div>
				</form>
			</div>
		</div>
	</section>

	<section id="guidance-section" class="container pb-0">
		<div class="row service-step">
			<div class="col-12 col-md-6 mb-5 mb-md-0 step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/guide-pic1.jpg" class="img-fluid step-icon" alt="Responsive image">
			</div>

			<div class="col-12 col-md-6 mb-5 mb-md-0 step-wrapper text-center text-md-right with-pt">
				<h3 class="step-title">Advice and guidance <br/>for self-employed</h3>
				<p class="step-text ml-auto custom-p-yb">Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat convallis laoreet enim.</p>

				<p class="more-p ml-auto custom-p-yb">
					Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed.
				</p>

				<p class="more-p ml-auto custom-p-yb">
					Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit.
				</p>

				<div class="center-btn-wrapper mt-5">
					<a href="#" type="submit" class="btn btn-primary ocean">Our services <ion-icon name="chevron-forward"></ion-icon></a>
				</div>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php get_footer(); ?>