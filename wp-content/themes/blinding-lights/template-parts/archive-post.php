<?php
    $id = get_the_ID();
?>
<div class="archive__item">
    <div class="image">
        <?php if(get_the_post_thumbnail($id)):?>
            <?php echo get_the_post_thumbnail($id,'medium'); ?>
        <?php else: ?>
            <img src="<?= get_template_directory_uri() . '/src/assets/images/placeholder.jpg'; ?>" alt="placeholder">
        <?php endif?>
    </div>
    <h2>
            <?= get_the_title($id); ?>
    </h2>
    <p class="excerpt"><?= get_the_excerpt(); ?></p>
    <a class="permalink" href="<?= get_the_permalink(); ?>">Read More</a>
</div>