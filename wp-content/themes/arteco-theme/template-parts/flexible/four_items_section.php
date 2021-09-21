<?php
$icon = get_sub_field('icon');
$title = get_sub_field('title');
$text_description = get_sub_field('text_description');
$read_more_link = get_sub_field('read_more_link');

$icon_s = get_sub_field('icon_s');
$title_s = get_sub_field('title_s');
$text_description_s = get_sub_field('text_description_s');
$read_more_link_s = get_sub_field('read_more_link_s');

$icon_t = get_sub_field('icon_t');
$title_t = get_sub_field('title_t');
$text_description_t = get_sub_field('text_description_t');
$read_more_link_t = get_sub_field('read_more_link_t');

$icon_f = get_sub_field('icon_f');
$title_f = get_sub_field('title_f');
$text_description_f = get_sub_field('text_description_f');
$read_more_link_f = get_sub_field('read_more_link_f');
?>
<section class="four-items-section">
    <div class="four-items-section-media-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main-title-section-heading align-center">
                    <header>
                        <h2><?php _e('Naši proizvodi i usluge','ade'); ?></h2>
                    </header>
                </div>
                <div class="four-items-description-item col-md-3">
                    <?php if ( $icon ) : ?>
                        <div class="four-items-item-icon">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /> 
                        </div>
                    <?php endif; ?>
                    <?php if ( $title ) : ?>
                        <div class="four-items-item-title">
                            <h3><?php echo $title; ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php if ( $text_description ) : ?>
                        <div class="four-items-item-description">
                            <p><?php echo $text_description; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if ( $read_more_link ) : ?>
                        <div class="four-items-item-read-more read-more-link-wrap">
                            <a class="link link-primary" href="<?php echo $read_more_link; ?>"><?php _e('Vidi više','ade'); ?> <i class="icon icon-arrow-right"></i></a>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <?php if ( $icon_s ) : ?>
                        <div class="four-items-item-icon">
                            <img src="<?php echo esc_url($icon_s['url']); ?>" alt="<?php echo esc_attr($icon_s['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                    <?php if ( $title_s ) : ?>
                        <div class="four-items-item-title">
                            <h3><?php echo $title_s; ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php if ( $text_description_s ) : ?>
                        <div class="four-items-item-description">
                            <p><?php echo $text_description_s; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if ( $read_more_link_s ) : ?>
                        <div class="four-items-item-read-more read-more-link-wrap">
                            <a class="link link-primary" href="<?php echo $read_more_link; ?>"><?php _e('Vidi više','ade'); ?> <i class="icon icon-arrow-right"></i></a>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <?php if ( $icon_t ) : ?>
                        <div class="four-items-item-icon">
                            <img src="<?php echo esc_url($icon_t['url']); ?>" alt="<?php echo esc_attr($icon_t['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                    <?php if ( $title_t ) : ?>
                        <div class="four-items-item-title">
                            <h3><?php echo $title_t; ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php if ( $text_description_t ) : ?>
                        <div class="four-items-item-description">
                            <p><?php echo $text_description_t; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if ( $read_more_link_t ) : ?>
                        <div class="four-items-item-read-more read-more-link-wrap">
                            <a class="link link-primary" href="<?php echo $read_more_link; ?>"><?php _e('Vidi više','ade'); ?> <i class="icon icon-arrow-right"></i></a>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <?php if ( $icon_f ) : ?>
                        <div class="four-items-item-icon">
                            <img src="<?php echo esc_url($icon_f['url']); ?>" alt="<?php echo esc_attr($icon_f['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                    <?php if ( $title_f ) : ?>
                        <div class="four-items-item-title">
                            <h3><?php echo $title_f; ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php if ( $text_description_f ) : ?>
                        <div class="four-items-item-description">
                            <p><?php echo $text_description_f; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if ( $read_more_link_f ) : ?>
                        <div class="four-items-item-read-more read-more-link-wrap">
                            <a class="link link-primary" href="<?php echo $read_more_link; ?>"><?php _e('Vidi više','ade'); ?> <i class="icon icon-arrow-right"></i></a>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.four-items-description-item col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        
    </div>
</section>