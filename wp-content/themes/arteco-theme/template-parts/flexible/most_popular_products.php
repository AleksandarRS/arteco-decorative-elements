<?php
$main_title = get_sub_field('main_title');
// $choose_most_popular_products = get_sub_field('choose_most_popular_products');
?>
<section class="most-popular-products-section">
    <div class="most-popular-products-section-wrapper">
        <div class="container">
            <div class="row most-popular-products-row">
                <div class="col-md-12 main-title-section-heading">
                    <header>
                        <h1><?php echo $main_title; ?></h1>
                    </header>
                </div>
                <?php  $featured_posts = get_sub_field('choose_most_popular_products');
                if( $featured_posts ): ?>
                    <div class="post-product-items-cards-wrapper col-md-12">
                        <div class="row post-product-items-cards-row">
                            <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                                <div class="post-product-items-cards-item col-md-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if( get_the_post_thumbnail() ): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-person.jpg" alt="default-product-image" />
                                        <?php endif; ?>
                                        <header class="post-title">
                                            <h2><?php the_title(); ?></h2>
                                        </header>
                                        <div class="post-product-excerpt">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                        <div class="post-product-read-more read-more-button-wrap">
                                            <a class="button button-primary" href="<?php the_permalink(); ?>"><?php _e('Vidi više','ade'); ?></a>
                                        </div>
                                    </a>
                                </div> <!-- /.post-product-items-cards-item col-md-4 -->
                            <?php endforeach; ?>
                        </div> <!-- /.row post-product-items-cards-row -->
                    </div> <!-- /.post-product-items-cards-wrapper col-md-12 -->
                        <?php 
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                <?php endif; ?>
                

                        

                    

            </div> <!-- /.row most-popular-products-row -->
        </div> <!-- /.container -->

    </div> <!-- /.most-popular-products-section-wrapper -->
</section>

