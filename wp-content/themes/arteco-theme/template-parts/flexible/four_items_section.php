<?php
$the_title = get_sub_field('the_title');

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
                        <h2><?php // _e('Naši proizvodi','ade'); ?></h2>
                        <h2><?php echo $the_title; ?></h2>
                    </header>
                </div>
                <div class="four-items-description-item col-md-3">
                    <div class="four-items-description-item-inner">
                        <?php if ( $icon ) : ?>
                            <div class="four-items-item-icon">
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /> 
                            </div>
                        <?php endif; ?>
                        <?php if ( $title ) : ?>
                            <div class="four-items-item-heading">
                                <h2 class="four-items-title"><?php echo $title; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ( $text_description ) : ?>
                            <div class="four-items-item-description">
                                <?php echo $text_description; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( $read_more_link ) : ?>
                            <div class="four-items-item-read-more read-more-link-wrap link-wrap">
                                <a class="link link-arrow link-tertiary" href="<?php echo $read_more_link; ?>"><span><?php _e('Vidi više','ade'); ?> <i class="icon icon-arrow-right"></i></span></a>
                            </div>
                        <?php endif; ?>
                    </div> <!-- /.four-items-description-item-inner -->
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <div class="four-items-description-item-inner">
                        <?php if ( $icon_s ) : ?>
                            <div class="four-items-item-icon">
                                <img src="<?php echo esc_url($icon_s['url']); ?>" alt="<?php echo esc_attr($icon_s['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <?php if ( $title_s ) : ?>
                            <div class="four-items-item-heading">
                                <h2 class="four-items-title"><?php echo $title_s; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ( $text_description_s ) : ?>
                            <div class="four-items-item-description">
                                <?php echo $text_description_s; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( $read_more_link_s ) : ?>
                            <div class="four-items-item-read-more read-more-link-wrap link-wrap">
                                <a class="link link-arrow link-tertiary" href="<?php echo $read_more_link_s; ?>"><span><?php _e('Vidi više','ade'); ?> <i class="icon icon-arrow-right"></i></span></a>
                            </div>
                        <?php endif; ?>
                    </div> <!-- /.four-items-description-item-inner -->
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <div class="four-items-description-item-inner">
                        <?php if ( $icon_t ) : ?>
                            <div class="four-items-item-icon">
                                <img src="<?php echo esc_url($icon_t['url']); ?>" alt="<?php echo esc_attr($icon_t['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <?php if ( $title_t ) : ?>
                            <div class="four-items-item-heading">
                                <h2 class="four-items-title"><?php echo $title_t; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ( $text_description_t ) : ?>
                            <div class="four-items-item-description">
                                <?php echo $text_description_t; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( $read_more_link_t ) : ?>
                            <div class="four-items-item-read-more read-more-link-wrap link-wrap">
                                <a class="link link-arrow link-tertiary" href="<?php echo $read_more_link_t; ?>"><span><?php _e('Vidi više','ade'); ?> <i class="icon icon-arrow-right"></i></span></a>
                            </div>
                        <?php endif; ?>
                    </div> <!-- /.four-items-description-item-inner -->
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <div class="four-items-description-item-inner">
                        <?php if ( $icon_f ) : ?>
                            <div class="four-items-item-icon">
                                <img src="<?php echo esc_url($icon_f['url']); ?>" alt="<?php echo esc_attr($icon_f['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <?php if ( $title_f ) : ?>
                            <div class="four-items-item-heading">
                                <h2 class="four-items-title"><?php echo $title_f; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ( $text_description_f ) : ?>
                            <div class="four-items-item-description">
                                <?php echo $text_description_f; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( $read_more_link_f ) : ?>
                            <div class="four-items-item-read-more read-more-link-wrap link-wrap">
                                <a class="link link-arrow link-tertiary" href="<?php echo $read_more_link_f; ?>"><span><?php _e('Vidi više','ade'); ?> <i class="icon icon-arrow-right"></i></span></a>
                            </div>
                        <?php endif; ?>
                    </div> <!-- /.four-items-description-item-inner -->
                </div> <!-- /.four-items-description-item col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        
    </div>
</section>