<?php if(key_exists('id', $args) && $args['id']):?>
<?php
    $id = $args['id'];
?>
  <div class="hot-news__item">
        <div class="image">
            <a href="<?= get_permalink($id) ?>"></a>
            <?php if(get_the_post_thumbnail($id)):?>
               <?php echo get_the_post_thumbnail($id,'medium'); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri() . '/src/assets/images/placeholder.jpg'; ?>" alt="placeholder">
            <?php endif?>
        </div>
      <h3>
          <a href="<?= get_permalink($id) ?>">
              <?= get_the_title($id); ?>
          </a>
      </h3>
      <?php if(get_the_excerpt($id)):?>
          <p class="excerpt">
              <?= get_the_excerpt($id); ?>
          </p>
      <?php endif?>
  </div>
<?php endif?>