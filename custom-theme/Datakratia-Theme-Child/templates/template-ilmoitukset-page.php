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
        <h1 class="headline">Millaista tukea olet hakemassa?</h1>

        <form action="" method="GET">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <select id="inputState" class="form-control" name="from-input">
                        <option selected>MINISTERIÖITTÄIN</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4">
                    <select id="inputState" class="form-control" name="measures-input">
                        <option selected>HAKUKRITEEREIN</option>
                        <option value="uusimmat">Uusimmat hankkeet</option>
                        <option value="jatkohankkeet">Jatkohankkeet</option>
                        <option value="umpeutuvat">Umpeutuvat hankkeet</option>
                        <option value="pisin">Pisin hakuaika</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4">
                    <input type="search" class="form-control" placeholder="Kirjoita hakusana" name="search-input">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">HAE</button>
        </form>

    </section>

    <div class="container">
        <hr>
    </div>

    <section id="facebook-posts" class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-1 card-header-icon">
                        <img src="http://demo10.demosaitti.com/wp-content/uploads/2020/09/thumbs-up-facebook.png" class="img-fluid" alt="Like Icon">
                    </div>
                    <div class="col card-header-title">Ajankohtaista</div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col step-wrapper">
                        <img src="https://demo10.demosaitti.com/wp-content/uploads/2020/09/board-with-pig.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col step-wrapper">
                        <h5 class="card-title">10 VINKKIÄ HAKEMUKSEN TEKOON</h5>
                        <p class="card-text">
                            Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät. Lorem Ipsum on ollut teollisuuden normaali testausteksti jo 1500-luvulta asti, jolloin tuntematon tulostaja otti kaljuunan ja sekoitti sen tehdäkseen esimerkkikirjan.
                        </p>
                    </div>
                </div>

                <div class="btn-wrapper text-right">
                    <a href="#" class="btn btn-primary ocean text-uppercase">lue lisää</a>
                </div>
            </div>
        </div>

    </section>

</main><!-- #site-content -->

<?php get_footer(); ?>