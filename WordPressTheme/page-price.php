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

            <?php
        global $post;

        // ライセンス講習のデータ取得
        $licenses = SCF::get('license', $post->ID);
        $has_license = !empty($licenses) && array_filter($licenses, function($license) {
            return !empty(trim($license['license__course'])) && trim($license['license__course']) !== '\\' && !empty(trim($license['license__price'])) && trim($license['license__price']) !== '\\';
        });
        if ($has_license): ?>
            <div id="licenseDiving" class="page-price__container table">
                <div class="table__category">
                    <h3>ライセンス講習</h3>
                </div>
                <table>
                    <?php foreach ($licenses as $license): ?>
                    <tr class="table__row">
                        <td class="table__course-title"><?php echo nl2br(esc_html($license['license__course'])); ?></td>
                        <td class="table__course-price">¥<?php echo nl2br(esc_html($license['license__price'])); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>

            <?php
        // 体験ダイビングのデータ取得
        $experiences = SCF::get('experience', $post->ID);
        $has_experience = !empty($experiences) && array_filter($experiences, function($experience) {
            return !empty(trim($experience['experience__course'])) && trim($experience['experience__course']) !== '\\' && !empty(trim($experience['experience__price'])) && trim($experience['experience__price']) !== '\\';
        });
        if ($has_experience): ?>
            <div id="experienceDiving" class="page-price__container table">
                <div class="table__category table__category--pt">
                    <h3>体験ダイビング</h3>
                </div>
                <table>
                    <?php foreach ($experiences as $experience): ?>
                    <tr class="table__row">
                        <td class="table__course-title">
                            <?php echo nl2br(esc_html($experience['experience__course'])); ?></td>
                        <td class="table__course-price">
                            ¥<?php echo nl2br(esc_html($experience['experience__price'])); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>

            <?php
        // ファンダイビングのデータ取得
        $funs = SCF::get('fun', $post->ID);
        $has_fun = !empty($funs) && array_filter($funs, function($fun) {
            return !empty(trim($fun['fun__course'])) && trim($fun['fun__course']) !== '\\' && !empty(trim($fun['fun__price'])) && trim($fun['fun__price']) !== '\\';
        });
        if ($has_fun): ?>
            <div id="funDiving" class="page-price__container table">
                <div class="table__category table__category--pt">
                    <h3>ファンダイビング</h3>
                </div>
                <table>
                    <?php foreach ($funs as $fun): ?>
                    <tr class="table__row">
                        <td class="table__course-title"><?php echo nl2br(esc_html($fun['fun__course'])); ?></td>
                        <td class="table__course-price">¥<?php echo nl2br(esc_html($fun['fun__price'])); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>

            <?php
        // スペシャルダイビングのデータ取得
        $specials = SCF::get('special', $post->ID);
        $has_special = !empty($specials) && array_filter($specials, function($special) {
            return !empty(trim($special['special__course'])) && trim($special['special__course']) !== '\\' && !empty(trim($special['special__price'])) && trim($special['special__price']) !== '\\';
        });
        if ($has_special): ?>
            <div id="specialDiving" class="page-price__container table">
                <div class="table__category">
                    <h3>スペシャルダイビング</h3>
                </div>
                <table>
                    <?php foreach ($specials as $special): ?>
                    <tr class="table__row">
                        <td class="table__course-title"><?php echo nl2br(esc_html($special['special__course'])); ?></td>
                        <td class="table__course-price">¥<?php echo nl2br(esc_html($special['special__price'])); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>

        </div>
    </section>


</main>


<?php get_footer(); ?>