<?php
$main_title = get_sub_field('main_title');
?>
<section class="services-subpages-section">
    <div class="container-wide">
        <div class="row services-subpages-row">
            <div class="col-md-12 main-title-section-heading align-center">
                <header>
                    <h2><?php echo $main_title; ?></h2>
                </header>
            </div>
            <div class="services-subpages-list-wrapper">
                <?php 
                    $ancestor_id = 132;
                    $our_pages = get_pages( array( 
                        'child_of' => $ancestor_id,
                        // 'orderby' => 'menu_order',
                        // 'order'   => 'DESC'
                     ) );
                    //  $query = new WP_Query( $our_pages );
                ?>
                <!-- <pre><?php //print_r($our_pages); ?> </pre> -->
                <?php if (!empty($our_pages)): ?>
                    <ul class="services-subpages-list">
                        <?php foreach ($our_pages as $key => $page_item): ?>
                            <li class="services-subpages-item">
                                <a class="services-subpage-link" href="<?php echo esc_url(get_permalink($page_item->ID)); ?>">
                                    <div class="services-subpages-featured-image-position" style="background-image: url('<?php echo get_the_post_thumbnail_url($page_item->ID,'large'); ?>');">
                                        <header class="title-header">
                                            <!-- <p class="title-label"><?php // echo $main_title; ?></p> -->
                                            <p class="title-label"><?php _e('Naše usluge','ade'); ?></p>
                                            <h2 class="services-main-title"><?php echo $page_item->post_title ; ?></h2>
                                        </header>
                                        <?php // echo get_the_post_thumbnail($page_item->ID,'large'); ?>
                                    </div>
                                </a>
                                
                            </li>
                        <?php endforeach ?>
                        <?php wp_reset_query(); ?>
                    </ul> <!-- /.services-subpages-list -->
                <?php endif ?>
            </div> <!-- /.services-subpages-list-wrapper -->
        </div> <!-- /.row services-subpages-row -->
    </div> <!-- /.container -->
</section>

