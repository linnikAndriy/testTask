<?php
    $footer_logo = get_field('footer_logo', 'option');
?>

<?php if(has_nav_menu('footer-menu') || $footer_logo):?>
    <footer class="footer">
        <div class="container-wide">
            <div class="footer__content">
                <?php if($footer_logo):?>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo ($footer_logo['alt']) ? $footer_logo['alt'] : 'company logo'  ?>" class="footer__logo">
                    </a>
                <?php endif?>
                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer__menu')); ?>
            </div>
        </div>
    </footer>
<?php endif?>


<?php wp_footer(); ?>
</body>
</html>
