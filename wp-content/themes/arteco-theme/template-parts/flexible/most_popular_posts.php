<?php
$main_title = get_sub_field('main_title');
$link = get_sub_field('see_all_posts_link');
// $choose_most_popular_products = get_sub_field('choose_most_popular_products');
?>
<section class="most-popular-posts-section">
    <div class="most-popular-posts-section-wrapper">
        <div class="container">
            <div class="row most-popular-posts-row">
                <div class="col-md-12 main-title-section-heading align-center">
                    <header>
                        <h1 class="title-h2-size"><?php echo $main_title; ?></h1>
                    </header>
                </div>
                <?php  $featured_blog_posts = get_sub_field('choose_most_popular_posts');
                if( $featured_blog_posts ): ?>
                    <div class="posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12">
                        <div class="row post-posts-items-cards-row">
                            <?php foreach( $featured_blog_posts as $post ): 
                                setup_postdata($post); ?>
                                <div class="posts-items-cards-item col-md-3">
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
                                                <span class="link link-arrow link-tertiary"><span><?php _e('Pro??itaj vi??e','ade'); ?> <i class="icon icon-arrow-right"></i></span></span>
                                            </div>
                                        </div> <!-- /.post-heading-excerpt-button-wraper -->
                                    </a>
                                </div> <!-- /.posts-items-cards-item col-md-3 -->
                            <?php endforeach; ?>
                        </div> <!-- /.row post-posts-items-cards-row -->
                        <div class="most-popular-posts-button see-all-posts">
                            <div class="posts-read-more read-more-button-wrap align-center">
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
                    </div> <!-- /.posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12 -->
                        <?php 
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                <?php endif; ?>

            </div> <!-- /.row most-popular-products-row -->
        </div> <!-- /.container -->

    </div> <!-- /.most-popular-products-section-wrapper -->
</section>

