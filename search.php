<?php
/**
 * The template for displaying search results pages.
 *
 * @package _s
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

				<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search results for <<%s>>', '_s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				$search_query = new WP_Query( 's='.$s.'&showposts=-1' );
				$search_keyword = wp_specialchars( $s, 1);
				$search_count = $search_query->post_count;
				// var_dump( $search_query );
				?>
				<span class="sub-title"><?php printf( __('<strong>%2$s</strong> Items Found.', 'thachpham'), $search_keyword, $search_count ); ?></span>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				* Run the loop for the search to output the results.
				* If you want to overload this in a child theme then include a file
				* called content-search.php and that will be used instead.
				*/
				get_template_part( 'content', 'search' );
				?>

				<?php endwhile; ?>

				<?php _s_paging_nav(); ?>

				<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->

		</div>
	</div>
</div>

<?php get_footer(); ?>
