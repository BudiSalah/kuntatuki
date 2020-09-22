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

    <section id="jobs-table-wrapper" class="container table-responsive pb-0">
        <table id="jobs-table" class="table m-0">
            <thead>
                <tr>
                    <th scope="col">Nimi</th>
                    <th scope="col">kesto</th>
                    <th scope="col">Projektityyppi</th>
                    <th scope="col">Organisaatio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $args = array(
                        'post_type'      => 'projects',
                        'areas'          => 'painting',
                        'order'          => 'DSC',
                        "posts_per_page" => 100
                    );

                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts() ) :
                        while ( $the_query->have_posts()) : 
                            $the_query->the_post();
                            $post_id = get_the_ID();
                ?>
                                <tr>
                                    <td class="darkblue-color-text">
                                        <a href="<?php echo get_permalink($post_id);?>">
                                            <?php
                                                $custom_title = the_title("", "", false);
                                                if (strlen($custom_title) > 90):
                                                    echo substr($custom_title, 0, 90) . "...";
                                                else:
                                                    echo $custom_title;
                                                endif;
                                            ?>
                                        </a>
                                    </td>
                                    <?php 
                                    
                                    ?>
                                    <td class="date-time-wrapper">
                                        <?php
                                            //echo get_the_date("j.n.Y h:i");
                                            $duration=get_post_meta($post_id, "duration",true);
                                            //var_dump($duration);
                                            echo (!$duration || $duration==' ')?'-':$duration;
                                        ?>
                                    </td>
                                  
                                    <td class="white-space-none">
                                        <?php
                                            echo get_post_meta($post_id, "organisation_type",true);
                                        ?>
                                    </td>
                                    <td class="white-space-none">
                                        <?php
                                            echo  str_replace(" |", "", get_post_meta($post_id, "organisation")[0]);
                                        ?>
                                    </td>
                                </tr>
                            <?php
                        endwhile; 
                        wp_reset_postdata();
                    endif;
                ?>
            </tbody>
        </table>
    </section>

    <section id="facebook-posts" class="container pb-0">
        <?php
            $wp_posts = get_posts();

            foreach ($wp_posts as $post):
                $post_id = $post->ID;
                $content = str_replace(array("<p>", "</p>"), "", $post->post_content);
                strlen($content) > 313 ? $content = substr($content, 0, 313) . "..." : $content = $content;
        ?>
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
                                <img src="<?php echo get_the_post_thumbnail_url($post_id);?>" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0 step-wrapper">
                                <h3 class="card-title"><?php echo the_title("", "", false);?></h3>
                                <p class="card-text"><?php echo $content;?></p>
                            </div>
                        </div>

                        <div class="btn-wrapper text-right">
                            <a href="<?php echo get_permalink($post_id);?>" class="btn btn-primary ocean text-uppercase mt-4">lue lisää</a>
                        </div>
                    </div>
                </div>
        <?php
            endforeach;
        ?>

    </section>

</main><!-- #site-content -->

<?php get_footer(); ?>