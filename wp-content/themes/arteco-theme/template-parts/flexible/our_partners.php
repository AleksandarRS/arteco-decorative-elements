<?php
$main_title = get_sub_field('main_title');
?>
<section class="our-partners-section">
    <div class="container">
        <div class="row our-partners-row">
            <div class="col-md-12 main-title-section-heading align-center">
                <header>
                    <?php if($main_title): ?>
                        <h1><?php echo $main_title; ?></h1>
                    <?php else: ?>        
                        <h1><?php _e('Naši partneri','ade'); ?></h1>
                    <?php endif ?>        
                </header>
            </div>
            <div class="our-partners-list-wrapper col-md-12">
            <?php if( have_rows('partners_images_and_logos', 'option') ): ?>
                <div class="our-partners-list-slider">
                    <?php while ( have_rows('partners_images_and_logos', 'option') ) : the_row(); ?>
                        <?php 
                            $partners_link = get_sub_field('partners_link', 'option');
                            $partners_image = get_sub_field('partners_image', 'option');
                        ?>
                        <div class="partners-logos-item">
                            <?php if($partners_link): ?>
                                <a href="<?php echo $partners_link; ?>">
                            <?php endif ?>
                                <img src="<?php echo esc_url($partners_image['url']); ?>" alt="<?php echo esc_attr($partners_image['alt']); ?>" />
                            <?php if($partners_link): ?>
                                </a>
                            <?php endif ?>
                        </div> <!-- /.partners-logos-item -->
                        
                    <?php endwhile; ?>
                </div> <!-- /.our-partners-list-slider -->
                <?php else :
                    // no rows found
                endif; ?>
            </div> <!-- /.our-partners-list-wrapper col-md-12 -->
        </div> <!-- /.row our-partners-row -->
    </div> <!-- /.container -->
</section>

