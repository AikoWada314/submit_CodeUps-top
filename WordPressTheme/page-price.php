<?php get_header(); ?>
<main>
    <section class="page-mv">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price-mv.jpg"
                    media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price-mv-sp.jpg"
                    alt="海の中で泳ぐ魚とダイバー" loading="lazy" decoding="async">
            </picture>
        </div>
        <div class="page-mv__title">
            <h1>Price</h1>
        </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>


    <section class="l-page-margin page-price">
        <div class="page-price__inner inner">
            <div id="licenseDiving" class="page-price__container table">
                <div class="table__category">
                    <h3>ライセンス講習</h3>
                </div>
                <table>
                    <?php
    global $post;
    $licenses = SCF::get('license', $post->ID);
    if (!empty($licenses)) :
        foreach ($licenses as $license) : ?>
                    <tr class="table__row">
                        <td class="table__course-title"><?php echo nl2br(esc_html($license['license__course'])); ?></td>
                        <td class="table__course-price">¥<?php echo nl2br(esc_html($license['license__price'])); ?></td>
                    </tr>
                    <?php endforeach;
    else : ?>
                    <tr class="table__row">
                        <td colspan="2">ライセンス情報が見つかりませんでした。</td>
                    </tr>
                    <?php endif; ?>
                </table>

            </div>
            <div id="experienceDiving" class="page-price__container table">
                <div class="table__category table__category--pt">
                    <h3>体験ダイビング</h3>
                </div>
                <table>
                    <?php
    global $post;
    $experiences = SCF::get('experience', $post->ID);
    if (!empty($experiences)) :
        foreach ($experiences as $experience) : ?>
                    <tr class="table__row">
                        <td class="table__course-title">
                            <?php echo nl2br(esc_html($experience['experience__course'])); ?></td>
                        <td class="table__course-price">
                            ¥<?php echo nl2br(esc_html($experience['experience__price'])); ?></td>
                    </tr>
                    <?php endforeach;
    else : ?>
                    <tr class="table__row">
                        <td colspan="2">ライセンス情報が見つかりませんでした。</td>
                    </tr>
                    <?php endif; ?>
                </table>

            </div>
            <div id="funDiving" class="page-price__container table">
                <div class="table__category table__category--pt">
                    <h3>ファンダイビング</h3>
                </div>
                <table>
                    <?php
    global $post;
    $funs = SCF::get('fun', $post->ID);
    if (!empty($funs)) :
        foreach ($funs as $fun) : ?>
                    <tr class="table__row">
                        <td class="table__course-title"><?php echo nl2br(esc_html($fun['fun__course'])); ?></td>
                        <td class="table__course-price">¥<?php echo nl2br(esc_html($fun['fun__price'])); ?></td>
                    </tr>
                    <?php endforeach;
    else : ?>
                    <tr class="table__row">
                        <td colspan="2">ライセンス情報が見つかりませんでした。</td>
                    </tr>
                    <?php endif; ?>
                </table>

            </div>
            <div id="specialDiving" class="page-price__container table">
                <div class="table__category">
                    <h3>スペシャルダイビング</h3>
                </div>
                <table>
                    <?php
    global $post;
    $specials = SCF::get('special', $post->ID);
    if (!empty($specials)) :
        foreach ($specials as $special) : ?>
                    <tr class="table__row">
                        <td class="table__course-title"><?php echo nl2br(esc_html($special['special__course'])); ?></td>
                        <td class="table__course-price">¥<?php echo nl2br(esc_html($special['special__price'])); ?></td>
                    </tr>
                    <?php endforeach;
    else : ?>
                    <tr class="table__row">
                        <td colspan="2">ライセンス情報が見つかりませんでした。</td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>