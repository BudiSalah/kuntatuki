<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<section id="hero" class="container">
		<div class="row">
			<div class="col">
				<h2 class="title-heading">Kaikki kuntien haettavissa olevat tuet yhdestä paikasta.</h2>
				<p>
					Kunnille suunnatuista rahoituksista jää hakematta yli <strong>40%</strong> pelkästään hakuprosessien
					ja kohteiden vaikean hahmottamisen vuoksi. Nyt <strong>Kuntatuki</strong> tarjoaa helpon palvelun,
					mistä jokainen kunta voi hakea yhdestä paikasta kaikki tarjolla olevat tuet ja tehdä hakemukset.
					Tilaamalla palvelun saat myös ilmoitukset saapuneista uusista hakumahdollisuuksista sähköpostiisi.
				</p>
				<div class="sc_hero-btns-wrapper">
					<a href="#" class="btn btn-primary">PYYDÄ TUNNUKSET</a>
					<a href="#" class="btn btn-primary">PALVELUSTA</a>
					<a href="#" class="btn btn-primary">KIRJAUDU</a>
				</div>

				<hr>

				<div class="row sc_ifu-section">
					<h4 class="col">Jos sinulla on kysyttää tai haluat varata demo -ajan, niin voit soittaa alla olevaan
						numeroon:</h4>
					<div class="col row custom-images-icons-wrapper">
						<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/avada-movers-johnsmith-final.jpg"
							class="img-fluid col" alt="Responsive image">
						<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/avada-movers-johnsmith-final.jpg"
							class="img-fluid col" alt="Responsive image">
					</div>
				</div>

				<h2>+358 50 591 2746</h2>
			</div>

			<div class="col">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/board-with-pig.jpg" class="img-fluid"
					alt="Responsive image">
			</div>
		</div>
	</section>

	<section id="how-it-can-help" class="container">
		<h1>Miten Kuntatuki voi auttaa teitä?</h1>

		<div id="help-steps" class="row">
			<div class="col step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/help-icon.png" class="img-fluid step-icon" alt="Responsive image">
				<h3 class="step-title">Helppo ja nopea käyttää.</h3>
				<p class="step-text">Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/team-icon.jpg" class="img-fluid step-icon" alt="Responsive image">
				<h3 class="step-title">Helppo ja nopea käyttää.</h3>
				<p class="step-text">Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/calc-icon.png" class="img-fluid step-icon" alt="Responsive image">
				<h3 class="step-title">Helppo ja nopea käyttää.</h3>
				<p class="step-text">Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col step-wrapper">
				<img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/compny-icon.png" class="img-fluid step-icon" alt="Responsive image">
				<h3 class="step-title">Helppo ja nopea käyttää.</h3>
				<p class="step-text">Lorem ipsum dolor sit amet.</p>
			</div>
		</div>

		<blockquote>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
			</p>

			<p class="quote-author">– Tuomas Hirvonen, Vesilahden Kunnan johtaja</p>
		</blockquote>

		<a href="#" class="btn btn-primary">PALVELUSTA</a>
	</section>

</main><!-- #site-content -->

<?php
get_footer();