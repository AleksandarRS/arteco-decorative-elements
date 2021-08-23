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
                <div class="col-md-12 main-title-section-heading">
                    <header>
                        <h1><?php _e('Naši proizvodi i usluge','ade'); ?></h1>
                    </header>
                </div>
                <div class="four-items-description-item col-md-3">
                    <?php if ( $icon ) : ?>
                        <div class="four-items-item-icon">
                            <i class="icon icon-<?php echo $icon; ?>"></i>
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
                        <div class="four-items-item-read-more read-more-button-wrap">
                            <a class="button button-primary" href="<?php echo $read_more_link; ?>"><?php _e('Vidi više','ade'); ?></a>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <?php if ( $icon_s ) : ?>
                        <div class="four-items-item-icon">
                            <i class="icon icon-<?php echo $icon_s; ?>"></i>
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
                        <div class="four-items-item-read-more read-more-button-wrap">
                            <a class="button button-primary" href="<?php echo $read_more_link_s; ?>"><?php _e('Vidi više','ade'); ?></a>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <?php if ( $icon_t ) : ?>
                        <div class="four-items-item-icon">
                            <i class="icon icon-<?php echo $icon_t; ?>"></i>
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
                        <div class="four-items-item-read-more read-more-button-wrap">
                            <a class="button button-primary" href="<?php echo $read_more_link_t; ?>"><?php _e('Vidi više','ade'); ?></a>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.four-items-description-item col-md-3 -->
                <div class="four-items-description-item col-md-3">
                    <?php if ( $icon_f ) : ?>
                        <div class="four-items-item-icon">
                            <i class="icon icon-<?php echo $icon_f; ?>"></i>
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
                        <div class="four-items-item-read-more read-more-button-wrap">
                            <a class="button button-primary" href="<?php echo $read_more_link_f; ?>"><?php _e('Vidi više','ade'); ?></a>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.four-items-description-item col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        
    </div>
</section>