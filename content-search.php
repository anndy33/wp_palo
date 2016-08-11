<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
?>

	<article class="search-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="post-type">
				<?php  ngothuong_post_format_type(); ?>
			</div>
				<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php ngothuong_entry_meta(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
		</header><!-- .entry-header -->
		<img src="<?php echo get_template_directory_uri(); ?>/images/post-seperator.png" alt="" width="90%"/>
		<div class="entry-content">
			<?php ngothuong_entry_content(); ?>
			<?php ngothuong_entry_tag(); ?>
		</div><!-- .entry-content -->		
	</article><!-- #post-## -->
