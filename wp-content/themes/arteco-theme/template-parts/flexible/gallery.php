<?php
$main_title = get_sub_field('main_title');
?>
<section class="gallery-section">
    <div class="gallery-section-wrapper">
        <div class="container container-narrow">
            <div class="row gallery-row">
                <?php if ( $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header>
                            <h1 class="title-h2-size"><?php echo $main_title; ?></h1>
                        </header>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
        </div> <!-- /.container container-narrow -->
        <?php if( have_rows('gallery_images') ): ?>
            <div class="gallery-slider-wrapper">
                <div class="gallery-slider">
                    <?php while ( have_rows('gallery_images') ) : the_row(); ?>
                        <?php $slider_image = get_sub_field('gallery_image'); ?>
                        <div class="gallery-item">
                            <img src="<?php echo esc_url($slider_image['url']); ?>" alt="<?php echo esc_attr($slider_image['alt']); ?>" />
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php  else : ?>
            <p>Nisu unete slike za galeriju!</p>
        <?php endif;?>
    </div> <!-- /.gallery-section-wrapper -->
</section> <!-- /.gallery-section -->