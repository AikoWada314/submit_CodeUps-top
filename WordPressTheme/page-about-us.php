<?php get_header(); ?>

<main>
    <section class="page-mv">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about-mv.jpg"
                    media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about-mv-sp.jpg"
                    alt="海の中で泳ぐ二匹の魚" loading="lazy" decoding="async">
            </picture>
        </div>
        <div class="page-mv__title">
            <h1>About us</h1>
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
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about2.jpg"
                        alt="青い海の中で泳ぐ2匹の魚" loading="lazy" decoding="async">
                </div>
                <div class="page-about__subImg u-desktop">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about1.jpg"
                        alt="青い空と琉球瓦の上に座るシーサー" loading="lazy" decoding="async">
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

    <?php
    // Smart Custom Fieldsから繰り返しフィールドを取得
    $images = SCF::get('about-us', get_the_ID());
    $has_valid_image = false;

    // 各画像URLをチェックし、有効な画像があるかどうかを確認
    if (!empty($images)) {
        foreach ($images as $image) {
            $image_url = wp_get_attachment_image_url($image['about-us__img'], 'full');
            if ($image_url) {
                $has_valid_image = true;
                break;
            }
        }
    }

    // 有効な画像が存在する場合のみ、セクションを表示
    if ($has_valid_image) :
    ?>
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
                        $index = 0;
                        foreach ($images as $image) {
                            $index++;
                            // 画像URLを取得
                            $image_url = wp_get_attachment_image_url($image['about-us__img'], 'full');
                            if ($image_url) {
                                ?>
                        <div class="modal__image js-modal">
                            <img src="<?php echo esc_url($image_url); ?>" alt="">
                        </div>
                        <?php
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
    <?php endif; ?>
</main>

<?php get_footer(); ?>