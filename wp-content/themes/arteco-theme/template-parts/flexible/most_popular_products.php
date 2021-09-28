<?php
$main_title = get_sub_field('main_title');
$link = get_sub_field('see_all_products_link');
// $choose_most_popular_products = get_sub_field('choose_most_popular_products');
?>
<section class="most-popular-products-section">
    <div class="most-popular-products-section-wrapper">
        <div class="container">
            <div class="row most-popular-products-row">
                <div class="col-md-12 main-title-section-heading align-center">
                    <header>
                        <h1 class="title-h2-size"><?php echo $main_title; ?></h1>
                    </header>
                </div>
                <?php  $featured_posts = get_sub_field('choose_most_popular_products');
                if( $featured_posts ): ?>
                    <div class="post-product-items-cards-wrapper col-md-12">
                        <div class="row post-product-items-cards-row">
                            <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                                <div class="post-product-items-cards-item col-md-3">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if( get_the_post_thumbnail() ): ?>
                                            <div class="post-featured-img-wrap" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                                <?php // the_post_thumbnail(); ?>
                                            </div>
                                        <?php else: ?>
                                            <div class="post-featured-img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                            </div>
                                        <?php endif; ?>
                                        <div class="post-heading-excerpt-button-wrapper">
                                            <div class="post-heading-excerpt-wrap">
                                                <header class="post-title entry-header">
                                                    <h2 class="title-h3-size entry-title"><?php the_title(); ?></h2>
                                                </header>
                                                <div class="post-product-excerpt entry-content">
                                                        <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                            <div class="post-product-read-more read-more-button-wrap">
                                                <span class="button button-tertiary"><?php _e('Vidi više','ade'); ?></span>
                                            </div>
                                        </div> <!-- /.post-heading-excerpt-button-wrapper -->
                                    </a>
                                </div> <!-- /.post-product-items-cards-item col-md-3 -->
                            <?php endforeach; ?>
                        </div> <!-- /.row post-product-items-cards-row -->
                        <div class="most-popular-products-button see-all-products">
                            <div class="post-product-read-more read-more-button-wrap align-center">
                                <?php 
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="button button-tertiary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div> <!-- /.post-product-items-cards-wrapper col-md-12 -->
                        <?php 
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                <?php endif; ?>

            </div> <!-- /.row most-popular-products-row -->
        </div> <!-- /.container -->

    </div> <!-- /.most-popular-products-section-wrapper -->
</section>

