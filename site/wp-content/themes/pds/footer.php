<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paulodesa
 */

?>

<footer id="colophon" class="site-footer text-center invisible">
    <div class="site-info">
        <a href="#" style="display: inline-block;width: 300px;height: auto;">
            <img style="width: 300px;height: auto;" src="<?php echo get_template_directory_uri(); ?>/assets/images/galdar-logo.png">
        </a>
        <p>Desenvolvido por Galdar Tecnologia</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
