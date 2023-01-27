<?php
$fields = get_fields();
$recent_title = $fields['recent_title'];

$recent_category = $fields['recent_category'];
?>
<div class="widget__recent">
    <?php if ($recent_title): ?>
        <h3 class="widjet-title"><?= $recent_title; ?></h3>
    <?php endif ?>
    <?php if ($recent_category): ?>
        <?php
        $args = array(
            'posts_per_page' => 3,
            'cat' => $recent_category
        );
        $wp_query = new WP_Query($args);
     ?>
    <?php if($wp_query->have_posts()):?>
        <div class="list">
            <?php foreach ($wp_query->posts as $item){
                get_template_part('template-parts/sidebar-post',null,['id'=>$item->ID]);
            } ?>
        </div>

    <?php endif?>

    <?php endif ?>
</div>

