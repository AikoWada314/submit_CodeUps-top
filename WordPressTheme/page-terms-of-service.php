<?php get_header(); ?>

<main>
    <section class="page-mv">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv.jpg"
                    media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv-sp.jpg"
                    alt="青い海と白い砂浜" loading="lazy" decoding="async">
            </picture>
        </div>
        <div class="page-mv__title">
            <h1>Terms of Service</h1>
        </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>

    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <section class="term-of-service l-page-margin">
        <div class="term-of-service__inner inner fish-icon">
            <h3 class="term-of-service__title">利用規約</h3>
            <?php the_content(); ?>
        </div>
    </section>
    <?php endwhile; ?>
    <?php else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'text-domain' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>