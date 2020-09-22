<?php
/**
 * Template Name: SC Prices Page
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

<main id="site-content" class="prices-main" role="main">
	<section id="prices-intro">
		<div class="container">
			<h1 class="text-center mb-0">Valitse kasvusuunnitelmasi</h1>
			
			<div class="row annually-or-monthly">
				<div class="col-5 text-right annually pl-0 active">Laskutetaan vuosittain</div>
				<button class="col-2 btn btn-primary"></button>
				<div class="col-5 text-left monthly pr-0">Laskutetaan kuukausittain</div>
			</div>
			
			<p class="text-center"><span class="live-icon"></span>Hanki enemmän liidejä millä tahansa sopimuksella Liidit-lisäosan ja siihen sisältyvien Chatbotin ja Live-chatin avulla. <a href="#">Näytä lisää</a></p>
		</div>
	</section>

	<section id="prices-plans" class="py-0">
		<div class="container prices-boxes">
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="single-plan">
						<h3 class="plan-name">Essential</h3>
						<p class="plan-text">Järjestä aktiviteetit ja myyntiputket helppoa seurantaa varten</p>
						<div class="pricing-wrapper">
							<span class="pricing-currency"> US$ </span>
							<span class="pricing-value"> 12 </span>
							<span class="pricing-decimal"> .50 </span>
						</div>
						<div class="plan-note">Per käyttäjä per kuukausi, laskutetaan vuosittain</div>
						<div class="plan-note-gray">tai $15 per käyttäjä, jos laskutus tapahtuu kuukausittain</div>
						<a href="#" class="btn btn-primary ocean text-uppercase w-100 plan-btn">Valitse</a>
					</div>	
				</div>
				<div class="col-12 col-md-4">
					<div class="single-plan">
						<h3 class="plan-name">Advanced</h3>
						<p class="plan-text">Seuraa ja automatisoi päivääsi vähentääksesi jalkatyötä ja lisätäksesi myyntiä</p>
						<div class="pricing-wrapper">
							<span class="pricing-currency"> US$ </span>
							<span class="pricing-value"> 24 </span>
							<span class="pricing-decimal"> .90 </span>
						</div>
						<div class="plan-note">Per käyttäjä per kuukausi, laskutetaan vuosittain</div>
						<div class="plan-note-gray">tai $29 per käyttäjä, jos laskutus tapahtuu kuukausittain</div>
						<a href="#" class="btn btn-primary ocean text-uppercase w-100 plan-btn">Valitse</a>
					</div>	
				</div>
				<div class="col-12 col-md-4">
					<div class="single-plan">
						<h3 class="plan-name">Professional</h3>
						<p class="plan-text">Kaikki mitä tarvitset yhteistyöhön, viestintään ja tuottojen kasvattamiseen</p>
						<div class="pricing-wrapper">
							<span class="pricing-currency"> US$ </span>
							<span class="pricing-value"> 49 </span>
							<span class="pricing-decimal"> .90 </span>
						</div>
						<div class="plan-note">Per käyttäjä per kuukausi, laskutetaan vuosittain</div>
						<div class="plan-note-gray">tai $59 per käyttäjä, jos laskutus tapahtuu kuukausittain</div>
						<a href="#" class="btn btn-primary ocean text-uppercase w-100 plan-btn">Valitse</a>
					</div>	
				</div>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php get_footer(); ?>