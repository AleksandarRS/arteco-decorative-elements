<?php
$main_title = get_sub_field('main_title');
?>
<section class="services-subpages-section">
    <div class="container">
        <div class="row services-subpages-row">
            <div class="col-md-12 main-title-section-heading align-center">
                <header>
                    <h1><?php echo $main_title; ?></h1>
                </header>
            </div>
            <div class="services-subpages-list-wrapper col-md-12">
                <?php 
                    $ancestor_id = 132;
                    $our_pages = get_pages( array( 'child_of' => $ancestor_id ) );
                ?>
                <?php if (!empty($our_pages)): ?>
                    <ul class="services-subpages-list">
                        <?php foreach ($our_pages as $key => $page_item): ?>
                            <li class="services-subpages-item">
                                <a class="services-subpage-link" href="<?php echo esc_url(get_permalink($page_item->ID)); ?>">
                                    <div class="services-subpages-featured-image-position" style="background-image: url('<?php echo get_the_post_thumbnail_url($page_item->ID,'large'); ?>');">
                                        <h2><?php echo $page_item->post_title ; ?></h2>
                                        <?php // echo get_the_post_thumbnail($page_item->ID,'large'); ?>
                                    </div>
                                </a>
                                
                            </li>
                        <?php endforeach ?>
                    </ul> <!-- /.services-subpages-list -->
                <?php endif ?>
            </div> <!-- /.services-subpages-list-wrapper col-md-12 -->
        </div> <!-- /.row services-subpages-row -->
    </div> <!-- /.container -->
</section>

