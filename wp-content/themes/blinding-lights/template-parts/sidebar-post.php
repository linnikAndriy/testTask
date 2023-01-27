<?php
$id = '';
if (key_exists('id', $args)){
    $id = $args['id'];
}
?>
<div class="sidebar-item__post">
    <div class="image">
        <?php if(get_the_post_thumbnail($id)):?>
            <?php echo get_the_post_thumbnail($id,'medium'); ?>
        <?php else: ?>
            <img src="<?= get_template_directory_uri() . '/src/assets/images/placeholder.jpg'; ?>" alt="placeholder">
        <?php endif?>
    </div>
    <div class="content">
        <h3>
            <a href="<?= get_the_permalink($id); ?>"><?= get_the_title($id); ?></a>
        </h3>
        <p class="excerpt"><?= get_the_excerpt(); ?></p>
    </div>

</div>
