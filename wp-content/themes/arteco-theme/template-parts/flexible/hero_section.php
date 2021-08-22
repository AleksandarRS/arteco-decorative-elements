<?php
$hero_image = get_sub_field('hero_image');
?>
<section class="hero-section">
    <div class="hero-section-media-wrap">
        <?php if ( $hero_image ) : ?>
            <div class="history-section-timeline-image">
                <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
                <div class="image-description-items-wrapper">
                    <div class="image-description-items">
                        <p class="hero-description-item">
                            Kvalitet proizvoda po ISO standardu 9000:80
                        </p>
                        <p class="hero-description-item">
                            <a href="#">Sertifikat o kvalitetu</a>
                        </p>
                        <p class="hero-description-item">
                            Domaci proizvod izradjen po starinskim receptima
                        </p>
                        <p class="hero-description-item">
                            Najkalitetniji materijali sa domaćeg i inostranog tržišta
                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>