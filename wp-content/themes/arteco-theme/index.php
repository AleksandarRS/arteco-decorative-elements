<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ade
 */

get_header(); ?>
<?php
$main_hero_title = get_field('main_hero_title', 'option');
$hero_description_small = get_field('hero_description_small', 'option');
$hero_image = get_field('hero_image', 'option');
?>
<section class="hero-section hero-section-small">
    <div class="hero-section-small-media-wrap left-calc">
        <div class="hero-section-small-image-wrap" style="background-image: url(<?php echo esc_url($hero_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($hero_image['alt']); ?>">
            <div class="container container-narrow">
                <div class="row image-text-row">
                    <div class="col-md-12 main-title-section-heading align-center">
                        <?php if ( $main_hero_title ) : ?>
                            <header>
                                <h1 class="main-hero-title main-title"><?php echo $main_hero_title; ?></h1>
                                <?php if ( $hero_description_small ) : ?>
                                    <div class="col-md-12 main-hero-description align-center">
                                        <?php echo $hero_description_small; ?>
                                    </div>
                                <?php endif; ?>
                            </header>
                        <?php else: ?>
                            <header>
                                <h1 class="main-hero-title main-title"><?php the_title(); ?></h1>
                                <?php if ( $hero_description_small ) : ?>
                                    <div class="col-md-12 main-hero-description align-center">
                                        <?php echo $hero_description_small; ?>
                                    </div>
                                <?php endif; ?>
                            </header>
                        <?php endif; ?>
                    </div>
                    
                </div>
            </div>
            <div class="hero-section-small-image-wrap-inner">
            </div> <!-- /.hero-section-image-wrap-inner -->
        </div> <!-- /.hero-section-image-wrap -->
    </div> <!-- /.hero-section-media-wrap -->
</section>
<div class="container">
	<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="post-product-items-cards-wrapper-post-page post-product-items-cards-wrapper d-flex">
					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : ?>
							<?php

							the_post();


							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', 'posts' );

							?>
						<?php endwhile; ?>

						<?php ade_post_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
