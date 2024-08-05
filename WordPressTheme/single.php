<section class="page-fv">
  <p class="page-fv__enTitle">works</p>
  <div class="inner page-fv__inner">
    <div class="page-fv__wrapper">
      <h1 class="page-fv__jaTitle">実績</h1>
    </div>
    <div class="page-fv__img">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-fv.jpg" alt="部品の写真" loading="lazy"
        decoding="async">
    </div>
  </div>
</section>


<div class="page-works l-page-margin">
  <div class="inner page-works__inner">
    <div class="page-works__articles articles">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="articles__item article">
        <div class="article__date">
          <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
        </div>
        <h1 class="article__title"><?php the_title(); ?></h1>
        <div class="article__img">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', ['loading' => 'lazy', 'decoding' => 'async']); ?>
          <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="デフォルト画像"
            loading="lazy" decoding="async">
          <?php endif; ?>
        </div>
        <div class="article__wrapper">
          <?php the_content(); ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>


    <div class="wp-pagenavi l-wp-pagenavi--mt">
      <div class="wp-pagenavi__inner--mw">
        <?php if (get_previous_post()) : ?>

        <div>
          <a class="previouspostslink previouspostslink--hover"
            href="<?php echo get_permalink(get_previous_post()->ID); ?>"></a>
        </div>
        <?php endif; ?>

        <?php if (get_next_post()) : ?>
        <div>
          <a class="nextpostslink nextpostslink--hover" href="<?php echo get_permalink(get_next_post()->ID); ?>"></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('bottom'); ?>

<?php get_footer(); ?>