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
			<?php
				$args = array(
					'post_type'      => 'product',
					'posts_per_page' => 3,
					"order"			 => "ASC"
				);
				
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ):
					$loop->the_post();
					global $product;
					$pro_name 		   = $product->get_name();
					$pro_short_desc    = $product->get_short_description();
					$pro_reg_price 	   = $product->get_regular_price();
					$pro_price_value   = substr($pro_reg_price, 0, strpos($pro_reg_price, "."));
					$pro_price_decimal = substr($pro_reg_price, strpos($pro_reg_price, "."));
					$note_text 		   = $product->get_attribute("note-text");
					$note_text_gray    = $product->get_attribute("note-text-gray");

					echo <<<HTML
						<div class="col-12 col-md-4">
							<div class="single-plan">
								<h3 class="plan-name">$pro_name</h3>
								<p class="plan-text">$pro_short_desc</p>
								<div class="pricing-wrapper">
									<span class="pricing-currency"> US$ </span>
									<span class="pricing-value"> $pro_price_value </span>
									<span class="pricing-decimal"> $pro_price_decimal </span>
								</div>
								<div class="plan-note">$note_text</div>
								<div class="plan-note-gray">$note_text_gray</div>
								<a href="cart/?add-to-cart={$product->get_id()}" class="btn btn-primary ocean text-uppercase w-100 plan-btn">Valitse</a>
							</div>	
						</div>
					HTML;
				endwhile;
			?>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php get_footer(); ?>