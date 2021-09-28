<?php
/**
 * Template part for displaying posts.
 *
 * @package ade
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-items-cards-item col-md-3'); ?>>
	<a href="<?php the_permalink(); ?>">

		<?php if( get_the_post_thumbnail() ): ?>
			<div class="post-featured-img-wrap" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
				<?php // the_post_thumbnail(); ?>
			</div>
		<?php else: ?>
			<div class="post-featured-img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
			</div>
		<?php endif; ?>

		<div class="post-heading-excerpt-button-wraper">
			<div class="post-heading-excerpt-wrap">
				<header class="post-title entry-header">
					<h2 class="title-h3-size entry-title"><?php the_title(); ?></h2>
					<div class="post-date entry-meta">
						<?php the_date( 'd.m.Y', '<p>', '</p>' ); ?>
					</div>
				</header>
				<div class="post-product-excerpt entry-content">
					<?php the_excerpt(); ?>
				</div>
			</div>
			<div class="post-product-read-more read-more-link-wrap link-wrap">
				<span class="link link-arrow link-tertiary"><span><?php _e('Pročitaj više','ade'); ?> <i class="icon icon-arrow-right"></i></span></span>
			</div>
		</div> <!-- /.post-heading-excerpt-button-wraper -->
	</a>
</article><!-- #post-## -->
