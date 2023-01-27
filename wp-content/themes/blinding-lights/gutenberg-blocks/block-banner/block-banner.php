<?php
$fields = get_fields();
$banner_title = $fields['banner_title'];
$banner_subtitle = $fields['banner_subtitle'];
$banner_button = $fields['banner_button'];
$banner_button_description = $fields['banner_button_description'];
?>

<section class="banner">
    <div class="container">
        <div class="banner__content">

            <?php if ($banner_title): ?>
                <h1><?php echo $banner_title; ?></h1>
            <?php endif ?>

            <?php if ($banner_subtitle): ?>
                <p class="banner__subtitle"><?php echo $banner_subtitle; ?></p>
            <?php endif ?>

            <?php if ($banner_button): ?>
                <div class="group">
                    <a href="<?= $banner_button['url']; ?>" class="btn banner__btn">
                        <?= $banner_button['title']; ?>
                        <?php display_svg(get_template_directory_uri() . '/src/assets/images/apple.svg', 'apple'); ?>
                    </a>
                    <?php if ($banner_button_description): ?>
                        <span><?= $banner_button_description; ?></span>
                    <?php endif ?>
                </div>
            <?php endif ?>

        </div>
    </div>

    <?php display_svg(get_template_directory_uri() . '/src/assets/images/arrow-down.svg', 'banner-arrow'); ?>
</section>