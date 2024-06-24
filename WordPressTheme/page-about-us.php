<?php get_header(); ?>


<main>
    <section class="page-mv">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about-mv.jpg" media="(min-width:768px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about-mv-sp.jpg" alt="海の中で泳ぐ二匹の魚" loading="lazy" decoding="async">
        </picture>
      </div>
      <div class="page-mv__title">
        <h2>About us</h2>
      </div>
    </section>

    <div class="breadcrumb">
      <div class="inner">
        <div>TOP > 私たちについて</div>
      </div>
    </div>

    <section class="page-about l-page-about">
      <div class="page-about__inner inner">

        <div class="page-about__img-wrapper">
          <div class="page-about__mainImg page-about__mainImg--width">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about2.jpg" alt="青い海の中で泳ぐ2匹の魚" loading="lazy" decoding="async">
          </div>
          <div class="page-about__subImg u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about1.jpg" alt="青い空と琉球瓦の上に座るシーサー" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="page-about__text-wrapper page-about__text-wrapper--position">
          <h3 class="page-about__copy page-about__copy--position">
            Dive into<br>the Ocean
          </h3>
          <div class="page-about__flex">
            <p class="page-about__text">
            <?php echo nl2br(SCF::get('about__text')); ?>

            </p>

          </div>
        </div>
      </div>
    </section>

    <section class="page-about-gallery l-page-about-gallery">
      <div class="page-about-gallery__inner inner">
        <div class="page-about-gallery__title">
          <div class="section-header">
            <p class="section-header__enTitle">Gallery</p>
            <h2 class="section-header__jaTitle">フォト</h2>
          </div>
        </div>

        <div class="page-about-gallery__modal">
    <div class="modal">
        <!-- モーダルを開くボタン -->
        <div class="modal__flex-container">
            <?php
            // Smart Custom Fieldsから繰り返しフィールドを取得
            $images = SCF::get('about-us', get_the_ID());
            if (!empty($images)) {
                $index = 0;
                foreach ($images as $image) {
                    $index++;
                    // 画像URLを取得
                    $image_url = wp_get_attachment_image_url($image['about-us__img'], 'full');
                    if ($image_url) {
                        // 1枚目と6枚目に特定のクラスを追加
                        $additional_class = ($index == 1 || $index == 6) ? ' modal__image--ar' : '';
                        ?>
                        <div class="modal__image js-modal<?php echo $additional_class; ?>">
                            <img src="<?php echo esc_url($image_url); ?>" alt="">
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
        <!-- / モーダルを開くボタン -->

        <!-- モーダル本体 -->
        <div class="modal__wrapper">
            <div class="modal__layer"></div>
            <div class="modal__container">
                <!-- モーダル内のコンテンツ -->
                <div class="modal__content"></div>
                <!-- / モーダル内のコンテンツ -->
            </div>
        </div>
        <!-- / モーダル本体 -->
    </div>
</div>


      </div>
    </section>

    
    <section class="top-contact l-top-contact">
      <div class="top-contact__inner inner">
        <div class="top-contact__content">
          <div class="top-contact__top">
            <div class="top-contact__logo">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-contact-sp.png" alt="CodeUps" loading="lazy" decoding="async">
            </div>

            <div class="top-contact__flex">
              <div class="top-contact__info-wrapper">
                <p class="top-contact__info top-contact__info--mt">沖縄県那覇市1-1</p>
                <p class="top-contact__info">TEL:0120-000-0000</p>
                <p class="top-contact__info">営業時間:8:30-19:00</p>
                <p class="top-contact__info">定休日:毎週火曜日</p>
              </div>
              <div class="top-contact__map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14320.124627230969!2d127.65836873349186!3d26.19566472716933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e569a926a083d5%3A0xf368c08083a19ad6!2z44CSOTAxLTAxNTIg5rKW57iE55yM6YKj6KaH5biC5bCP56aE77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1711282365114!5m2!1sja!2sjp"
                  style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="top-contact__bottom">
            <div class="top-contact__title">
              <div class="section-header">
                <p class="section-header__enTitle section-header__enTitle--big">Contact
                </p>
                <h2 class="section-header__jaTitle section-header__jaTitle--mt">お問い合わせ</h2>
              </div>
              <p class="top-contact__text">ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="top-contact__btn">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn slide long"><span>Contact us</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


    <?php get_footer(); ?>
