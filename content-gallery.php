<?php
/**
 * @package _s
 */
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!--this class help image is displayed-->
				<header class="entry-header">
					<div class="post-type">
						<?php ngothuong_post_format_type(); ?>
					</div>
					
					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php ngothuong_entry_meta(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
					<img class="title-seperator" src="<?php echo get_template_directory_uri(); ?>/images/post-seperator.png" alt="" width="80%"/>
				</header><!-- .entry-header -->	
				
				<div class="entry-content">
							<?php ngothuong_entry_content(); ?>
						<?php ngothuong_entry_tag(); ?>
				</div><!-- .entry-content -->			
			</article><!-- #post-## -->
		</div>

	</div>
</div>
