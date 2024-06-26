<?php if (function_exists('bcn_display')) : ?>
    <?php $breadcrumb_class = is_404() ? 'breadcrumb breadcrumb--404' : 'breadcrumb'; ?>
    <div class="<?php echo $breadcrumb_class; ?>" typeof="BreadcrumbList" vocab="https://schema.org/">
        <div class="inner">
        <?php bcn_display(); ?>
        </div>
    </div>
<?php endif; ?>

