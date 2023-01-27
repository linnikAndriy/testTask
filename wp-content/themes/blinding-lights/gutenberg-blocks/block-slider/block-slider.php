<?php
$fields = get_fields();
$section_title_slider = $fields['section_title_slider'];
$section_subtitle_slider = $fields['section_subtitle_slider'];
$list_slider = $fields['list_slider'];
?>


<section class="slider">
    <div class="container">

        <?php if($section_title_slider):?>
           <h2 class="title">
               <?= str_replace(['/*','*/'],['<span>','</span>'],$section_title_slider ); ?>
           </h2>
        <?php endif?>
        <?php if($section_subtitle_slider):?>
           <p class="slider__subtitle">
               <?= $section_subtitle_slider; ?>
           </p>
        <?php endif?>
        <?php if($list_slider):?>
           <div class="slider__list">

               <?php foreach ($list_slider as $slide): ?>
                <div class="slider__item">
                    <div class="content">
                        <h4>
                            <?= $slide['title']; ?>
                        </h4>
                        <div class="wrap">
                            <?= $slide['content']; ?>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?= $slide['image']['url']; ?>" alt="<?= $slide['image']['alt']; ?>">
                    </div>
                </div>
               <?php endforeach; ?>

           </div>
            <div class="slider__navigation">
                <div class="dots">

                </div>
                <div class="arrows">
                    <div class="prev">
                        <?php display_svg(get_template_directory_uri() . '/src/assets/images/arrow-prev.svg','static'); ?>
                        <?php display_svg(get_template_directory_uri() . '/src/assets/images/arrow-next.svg','active'); ?>
                    </div>
                    <div class="next">
                        <?php display_svg(get_template_directory_uri() . '/src/assets/images/arrow-prev.svg','static'); ?>
                        <?php display_svg(get_template_directory_uri() . '/src/assets/images/arrow-next.svg','active'); ?>
                    </div>

                </div>
            </div>
        <?php endif?>
    </div>
</section>
