<?php
$main_hero_title = get_sub_field('main_hero_title');
$hero_image = get_sub_field('hero_image');

$hero_description_f = get_sub_field('hero_description_f');
$hero_description_s = get_sub_field('hero_description_s');
$hero_description_t = get_sub_field('hero_description_t');
$hero_description_l = get_sub_field('hero_description_l');
?>
<section class="hero-section">
    <div class="hero-section-media-wrap left-calc">
        <div class="hero-section-image-wrap" style="background-image: url(<?php echo esc_url($hero_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($hero_image['alt']); ?>">
            <div class="hero-section-image-wrap-inner">
                <div class="image-description-items-wrapper">
                    <div class="image-description-items">
                        <div class="hero-description-item">
                            <div class="hero-decription-icon-animate-wrap">
                                <?php if($hero_description_f): ?>
                                    <div class="hero-icon">
                                        <i class="icon icon-awesome-plus"></i>
                                    </div>
                                    <div class="hero-text-description">
                                        <?php echo $hero_description_f; ?>
                                    </div>
                                <?php endif ?> 
                            </div>
                        </div>
                        <div class="hero-description-item">
                            <div class="hero-decription-icon-animate-wrap">
                                <?php if($hero_description_s): ?>
                                    <div class="hero-icon">
                                        <i class="icon icon-awesome-plus"></i>
                                    </div>
                                    <div class="hero-text-description">
                                        <?php echo $hero_description_s; ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="hero-description-item">
                            <div class="hero-decription-icon-animate-wrap">
                                <?php if($hero_description_t): ?>
                                    <div class="hero-icon">
                                        <i class="icon icon-awesome-plus"></i>
                                    </div>
                                    <div class="hero-text-description">
                                        <?php echo $hero_description_t; ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="hero-description-item">
                            <div class="hero-decription-icon-animate-wrap">
                                <?php if($hero_description_l): ?>
                                    <div class="hero-icon">
                                        <i class="icon icon-awesome-plus"></i>
                                    </div>
                                    <div class="hero-text-description">
                                        <?php echo $hero_description_l; ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.image-description-items-wrapper -->
                <div class="d-flex hero-title-partners">
                    <div class="col-md-7">
                        <div class="hero-main-title-wrapper">
                            <header class="title-header">
                                <?php if($main_hero_title): ?>
                                    <h1 class="title-label"><?php _e('Arteco dekorativni elementi','ade'); ?></h1>
                                    <h2 class="the-title"><?php echo $main_hero_title; ?></h2>
                                <?php else: ?>        
                                    <h1 class="title-label"><?php _e('Arteco dekorativni elementi','ade'); ?></h1>
                                    <h2 class="the-title"><?php _e('Domaći proizvod izrađen po starinskim receptima','ade'); ?></h2>
                                <?php endif ?>        
                            </header>
                        </div>
                    </div>
                    <div class="col-md-5 hero-partners-wrapper">
                        <div class="hero-partners-inner">
                            <div class="hero-partners-wrap hero-label-link-wrapper">
                                <div class="hero-partners-label hero-label-wrap title-header">
                                    <?php if($main_title): ?>
                                        <p class="title-label"><?php echo $main_title; ?></p>
                                    <?php else: ?>        
                                        <p class="title-label"><?php _e('Naši partneri','ade'); ?></p>
                                    <?php endif ?>
                                </div>
                                <div class="hero-partners-link hero-link-wrap">
                                    <a class="link-white link link-arrow" href="#"><span><?php _e('Svi naši partneri','ade'); ?> <i class="icon icon-arrow-right"></i></span></a>
                                </div>
                            </div> <!-- /.hero-partners-wrap hero-label-link-wrapper -->
                            <div class="our-partners-list-wrapper">
                                <?php if( have_rows('partners_images_and_logos', 'option') ): ?>
                                    <div class="our-partners-list-slider">
                                        <?php while ( have_rows('partners_images_and_logos', 'option') ) : the_row(); ?>
                                            <?php 
                                                $partners_link = get_sub_field('partners_link', 'option');
                                                $partners_image = get_sub_field('partners_image', 'option');
                                            ?>
                                            <div class="partners-logos-item">
                                                <div class="partners-logos-item-inner data-equal-item">
                                                    <?php if($partners_link): ?>
                                                        <a href="<?php echo $partners_link; ?>">
                                                    <?php endif ?>
                                                        <img src="<?php echo esc_url($partners_image['url']); ?>" alt="<?php echo esc_attr($partners_image['alt']); ?>" />
                                                    <?php if($partners_link): ?>
                                                        </a>
                                                    <?php endif ?>
                                                </div> <!-- /.partners-logos-item-inner data-equal-item -->
                                            </div> <!-- /.partners-logos-item -->
                                            
                                        <?php endwhile; ?>
                                    </div> <!-- /.our-partners-list-slider -->
                                <?php else :
                                    // no rows found
                                endif; ?>
                            </div> <!-- /.our-partners-list-wrapper -->
                        </div> <!-- /.hero-partners-inner -->
                    </div> <!-- /.col-md-5 hero-partners-wrapper -->
                </div> <!-- /.d-flex hero-title-parrtners-d-flex -->
            </div> <!-- /.hero-section-image-wrap-inner -->
        </div> <!-- /.hero-section-image-wrap -->
    </div> <!-- /.hero-section-media-wrap -->
</section>