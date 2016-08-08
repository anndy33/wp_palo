<?php
/**
 * @package _s
 */
?>
<div class="container">
	<div class="row">		
		<div class="col-md-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					 <div class="post-type">
					 	<?php  ngothuong_post_format_type(); ?>
					 </div>
					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
						<i class="fa fa-quote-left" aria-hidden="true"></i>
						<?php ngothuong_entry_content(); ?>
						<?php ngothuong_entry_tag(); ?>
				</div><!-- .entry-content -->		
			</article><!-- #post-## -->
		</div>		
	</div>
</div>
