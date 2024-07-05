<?php get_header(); ?>
<main>
    <section class="page-mv">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-faq-mv.jpg" media="(min-width:768px)
          ">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-faq-mv-sp.jpg" alt="青い海と白い砂浜"
                    loading="lazy" decoding="async">
            </picture>
        </div>
        <div class="page-mv__title">
            <h1>FAQ</h1>
        </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>


    <section class="page-faq l-page-margin">
        <div class="page-faq__inner inner fish-icon">
            <div class="page-faq__accordion accordion">
                <div class="accordion__container">
                    <?php
global $post;
$faqs = SCF::get('faq_group', $post->ID);
if (!empty($faqs)) : 
    foreach ($faqs as $faq) : ?>
                    <div class="accordion__wrapper">
                        <h3 class="accordion__title jsAccordionTitle"><?php echo esc_html($faq['faq__question']); ?>
                        </h3>
                        <div class="accordion__content">
                            <?php echo nl2br(esc_html($faq['faq__answer'])); ?>
                        </div>
                    </div>
                    <?php endforeach;
else : ?>
                    <p>FAQが見つかりませんでした。</p>
                    <?php endif; ?>





                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>