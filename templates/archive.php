<?php
/* 
Template Name: Archive
*/
get_header(); ?>
<div class="container">

	<div class="row">		
		<div class="col-md-12">
			<article class="archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					 <?php while ( have_posts() ) : the_post(); ?>				
							<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
					<?php endwhile; // end of the loop. ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php the_content(); ?>
					
					<div class="author">
						<h1>Author</h1>
						<?php wp_list_authors( 'exclude_admin=0' ); ?>
					</div>
					

				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		</div>
	</div>
</div>
<?php get_footer(); ?>
