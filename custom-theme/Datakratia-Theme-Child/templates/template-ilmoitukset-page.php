<?php
/**
 * Template Name: SC Ilmoitukset Page
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

<main id="site-content" role="main">
    <section id="what-you-look-for" class="container">
        <h1 class="headline text-center">Millaista tukea olet hakemassa?</h1>

        <form action="" method="GET" class="text-center">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <select id="select-from" class="form-control has-custom-select" name="from-input" value="">
                        <option>MINISTERIÖITTÄIN</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    <div id="custom-select-from" class="custom-select-input-wrapper">
                        <div class="custom-select-input">MINISTERIÖITTÄIN</div>
                        <ul class="custom-select-options">
                            <li option-value="1">1</li>
                            <li option-value="2">2</li>
                            <li option-value="3">3</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <select id="select-measures" class="form-control has-custom-select" name="measures-input" value="">
                        <option>HAKUKRITEEREIN</option>
                        <option value="uusimmat">Uusimmat hankkeet</option>
                        <option value="jatkohankkeet">Jatkohankkeet</option>
                        <option value="umpeutuvat">Umpeutuvat hankkeet</option>
                        <option value="pisin">Pisin hakuaika</option>
                    </select>

                    <div id="custom-select-measures" class="custom-select-input-wrapper">
                        <div class="custom-select-input">HAKUKRITEEREIN</div>
                        <ul class="custom-select-options">
                            <li option-value="uusimmat">Uusimmat hankkeet</li>
                            <li option-value="jatkohankkeet">Jatkohankkeet</li>
                            <li option-value="umpeutuvat">Umpeutuvat hankkeet</li>
                            <li option-value="pisin">Pisin hakuaika</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <input type="search" class="form-control" placeholder="Kirjoita hakusana" name="search-input">
                </div>
            </div>

            <button type="submit" class="btn btn-primary darkblue">HAE</button>
        </form>

    </section>

    <div class="container hr-wrapper">
        <hr>
    </div>

    <section id="facebook-posts" class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-1 card-header-icon">
                        <img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/thumbs-up-facebook.png" class="img-fluid" alt="Like Icon">
                    </div>
                    <h4 class="col darkblue-color-text card-header-title">
                        <a href="#">Ajankohtaista</a>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6 img-wrapper">
                        <img src="https://demo10.demosaitti.com/wp-content/uploads/2020/09/board-with-pig.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0 step-wrapper">
                        <h3 class="card-title">10 VINKKIÄ HAKEMUKSEN TEKOON</h3>
                        <p class="card-text">
                            Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät. Lorem Ipsum on ollut teollisuuden normaali testausteksti jo 1500-luvulta asti, jolloin tuntematon tulostaja otti kaljuunan ja sekoitti sen tehdäkseen esimerkkikirjan.
                        </p>
                    </div>
                </div>

                <div class="btn-wrapper text-right">
                    <a href="#" class="btn btn-primary ocean text-uppercase mt-4">lue lisää</a>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-1 card-header-icon">
                        <img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/thumbs-up-facebook.png" class="img-fluid" alt="Like Icon">
                    </div>
                    <h4 class="col darkblue-color-text card-header-title">
                        <a href="#">Ajankohtaista</a>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6 img-wrapper">
                        <img src="https://demo10.demosaitti.com/wp-content/uploads/2020/09/board-with-pig.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0 step-wrapper">
                        <h3 class="card-title">10 VINKKIÄ HAKEMUKSEN TEKOON</h3>
                        <p class="card-text">
                            Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät. Lorem Ipsum on ollut teollisuuden normaali testausteksti jo 1500-luvulta asti, jolloin tuntematon tulostaja otti kaljuunan ja sekoitti sen tehdäkseen esimerkkikirjan.
                        </p>
                    </div>
                </div>

                <div class="btn-wrapper text-right">
                    <a href="#" class="btn btn-primary ocean text-uppercase mt-4">lue lisää</a>
                </div>
            </div>
        </div>

    </section>

</main><!-- #site-content -->

<?php get_footer(); ?>