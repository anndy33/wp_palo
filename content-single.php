<?php
/**
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="post-type">
			<?php  ngothuong_post_format_type(); ?>
		</div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php ngothuong_entry_meta(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<img class="title-seperator" src="<?php echo get_template_directory_uri(); ?>/images/post-seperator.png" alt="" width="90%"/>
	<div class="entry-content">
		<?php ngothuong_entry_content(); ?>				
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ngothuong_entry_tag(); ?>		
		<!-- echo the total of comment in the current post -->
		<div class="comment-no">
			<?php $totalcomments = get_comments_number(); echo $totalcomments." comments"; ?>	
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'menu-icon-single' ) ); ?>	
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
