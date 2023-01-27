<?php
    $fields = get_fields();
    $about_title = $fields['about_title'];
    $about_content = $fields['about_content'];
?>

<section class="about">
    <div class="container">
        <div class="about__content">
            <?php if($about_title):?>
                <h2 class="title">
                    <?= $about_title; ?>
                </h2>
            <?php endif?>
            <?php if($about_content):?>
                <div class="about__text">
                    <?= $about_content; ?>
                </div>
            <?php endif?>
        </div>

    </div>
</section>
