<?php
$main_image = get_sub_field('main_image');
$text_content_section = get_sub_field('text_content_section');
$select_your_url = get_sub_field('select_your_url');
?>
<section class="image-text-section">
    <div class="image-text-section-wrapper">
        <div class="container container-narrow">
            <div class="row image-text-row">
                <?php if ( $main_image ) : ?>
                    <div class="col-md-6 image-text-section-main-image">
                        <div class="image-text-section-main-image-inner">
                            <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>" />
                        </div> <!-- /.image-text-section-main-image -->
                    </div>
                <?php endif; ?>
                <?php if ( $text_content_section || $select_your_url ) : ?>
                    <div class="col-md-6 image-text-section-main-text-content-description">
                        <div class="image-text-section-main-text-content-description-inner">
                            <?php echo $text_content_section; ?>
                        </div> <!-- /.image-text-section-main-image -->
                        <?php if ( $select_your_url ) : ?>
                            <div class="image-text-section-read-more-button-wrap read-more-button-wrap">
                                <a class="button button-tertiary" href="<?php echo $select_your_url; ?>"><?php _e('Pročitaj više o Arteco-u','ade'); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
        </div> <!-- /.container container-narrow -->
    </div> <!-- /.image-text-section-wrapper -->
</section>