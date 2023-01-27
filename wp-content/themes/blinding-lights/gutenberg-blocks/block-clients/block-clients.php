<?php
$fields = get_fields();
$clients_title = $fields['clients_title'];

$clients_list = $fields['clients_list'];
?>

<section class="client">
    <div class="container">
        <?php if ($clients_title): ?>
            <h2 class="title">
                <?= $clients_title; ?>
            </h2>
        <?php endif ?>


        <?php if ($clients_list): ?>
            <div class="client__list">
                <?php foreach ($clients_list as $client): ?>
                    <a href="<?= get_permalink($client); ?>" class="client__item">
                        <?php if (get_the_post_thumbnail($client)): ?>
                            <?php echo get_the_post_thumbnail($client, 'medium'); ?>
                        <?php else: ?>
                            <img src="<?= get_template_directory_uri() . '/src/assets/images/placeholder.jpg'; ?>"
                                 alt="placeholder">
                        <?php endif ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif ?>

    </div>
</section>