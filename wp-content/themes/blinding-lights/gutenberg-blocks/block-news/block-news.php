<?php
$fields = get_fields();
$news_title = $fields['news_title'];
$news_subtitle = $fields['news_subtitle'];
$news_list = $fields['news_list'];
?>

<section class="hot-news">
    <div class="container">
        <?php if($news_title):?>
           <h2 class="title">
               <?= $news_title; ?>
           </h2>
        <?php endif?>
        <?php if($news_subtitle):?>
           <p class="subtitle">
               <?= $news_subtitle; ?>
           </p>
        <?php endif?>
        <div class="hot-news__list">
            <?php if($news_list){
                foreach ($news_list as $item){
                    get_template_part('template-parts/hot-news-post',null,['id'=>$item]);
                }
            }?>

        </div>

    </div>
</section>