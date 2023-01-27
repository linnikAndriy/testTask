<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blinding-lights
 */

get_header();
?>
<?php
$id_cat = get_queried_object_id();
set_query_var('posts_per_page', 1);
?>


    <main id="primary" class="site-main">

        <section class="archive__banner">
            <div class="container-wide">
                <h1><?= get_cat_name($id_cat) ?></h1>
            </div>
        </section>

        <?php if (have_posts()): ?>

            <section class="archive__posts">
                <div class="container-wide">
                    <div class="wrap">
                        <div class="left">
                            <div class="breadcreams">
                                <a href="<?= home_url(); ?>"> <?php  _e('Home',THEME_TD); ?></a>
                                <span> — </span>
                                <a class="current" href="<?=get_category_link($id_cat); ?>"><?= get_cat_name($id_cat) ?></a>
                            </div>
                            <div class="archive__list">
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php     get_template_part('template-parts/archive-post'); ?>
                                <?php endwhile; ?>
                            </div>
                            <?php the_posts_pagination(array(
                                'end_size' => 1,
                                'mid_size' => 1,
                                'prev_text' =>'<span class="wrap-arrow wrap-arrow-prev">' . return_svg(get_template_directory_uri() . '/src/assets/images/arrow-prev.svg', 'static')  . return_svg(get_template_directory_uri() . '/src/assets/images/arrow-next.svg', 'active') .'</span>',
                                'next_text' =>'<span class="wrap-arrow wrap-arrow-next">' . return_svg(get_template_directory_uri() . '/src/assets/images/arrow-prev.svg', 'static')  . return_svg(get_template_directory_uri() . '/src/assets/images/arrow-next.svg', 'active') .'</span>',
                            )); ?>
                        </div>
                        <div class="right">
                            <?php dynamic_sidebar('foundation_sidebar_right'); ?>
                        </div>
                    </div>

                </div>
            </section>
        <?php endif ?>



    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
