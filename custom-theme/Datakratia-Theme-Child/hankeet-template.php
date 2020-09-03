<?php 
/**
* Template Name: Hankeet Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); 

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
		'post_type' => 'projects',
		'post_status' => 'publish',
		'posts_per_page' => 10,
		'paged' => $paged,
		'orderby'   => 'ID',
        'order' => 'DESC'
	);
	
$query = new WP_Query( $args );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( $query->have_posts() ) : ?>

			<header class="page-header"><h2 class="page-title">hankeet</h2></header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( $query->have_posts() ) :
				$query->the_post();

            $entry_header_classes = ' header-footer-group';				
			?>	
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                <header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">
                    	<?php
                    	the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                    	?>
            		
        			</header><!-- .entry-header -->
            
            
            	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">
            
            		<div class="entry-content">
            
            			<?php
            				the_excerpt();
            			?>
            
            		</div><!-- .entry-content -->
            
            	</div><!-- .post-inner -->
            
            	<div class="section-inner">
            		<?php
            		wp_link_pages(
            			array(
            				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
            				'after'       => '</nav>',
            				'link_before' => '<span class="page-number">',
            				'link_after'  => '</span>',
            			)
            		);
            
            		edit_post_link();
            
            		?>
            
            	</div><!-- .section-inner -->
            
            
            </article><!-- .post -->
				
				<?php
				
			endwhile;
            
            wp_pagenavi();
            
    		$total_pages = $query->max_num_pages;
    		if ($total_pages > 1){
    
    			$current_page = max(1, get_query_var('paged'));
    
    			echo '<div class="custom-pagination">';
    			echo paginate_links(array(
    				'base' => get_pagenum_link(1) . '%_%',
    				'format' => '/page/%#%',
    				'current' => $current_page,
    				'total' => $total_pages,
    				'prev_text'    => __('« Edellinen'),
    				'next_text'    => __('seuraava »'),
    				'add_args'  => array()
    			));
    			echo '</div>';
    		}
    			
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
