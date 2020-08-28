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

    <footer id="mastfoot" class="site-footer text-center invisible">

        <div id="social">
            <div class="text-center">
                <h2 class="heading mb-30">Contatos</h2>

                <ul class="social-icons">
                    <li>
                        <a target="_blank" href="<?php echo get_field('linkedin', 'option') ? get_field('linkedin', 'option') : '#'; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_field('facebook', 'option') ? get_field('facebook', 'option') : '#'; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo get_field('instagram', 'option') ? get_field('instagram', 'option') : '#'; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://wa.me/<?php echo get_field('whatsapp', 'option') ? get_field('whatsapp', 'option') : '#'; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="site-info">
            <a href="#" style="display: inline-block;width: 300px;height: auto;">
                <img style="width: 300px;height: auto;"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/galdar-logo.png">
            </a>
            <p>Desenvolvido por Galdar Tecnologia</p>
        </div>
    </footer>
</div>
<div class="site-footer-padding"></div>

<?php wp_footer(); ?>

</body>
</html>
