<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paulodesa
 */

get_header();
?>

    <section id="intro" class="jumbotron">
        <div class="centered text-center">
            <p class="sub-heading"><?php echo get_field('welcome_text', 'option') ? get_field('welcome_text', 'option') : 'Seja bem vindo!'; ?></p>

	        <?php if( have_rows('how_may_i_help_options', 'option') ): ?>

                <h2 class="heading">Em que posso te ajudar?
                    <div id="flip">
                    <?php while( have_rows('how_may_i_help_options', 'option') ) : the_row(); ?>
                    <div><div><?php echo get_sub_field('text'); ?></div></div>
                    <?php endwhile; ?>
                    </div>
                </h2>

	        <?php else: ?>
                <h2 class="heading">Em que posso te ajudar?</h2>
	        <?php endif; ?>

        </div>
        <img class="call-to-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/justice-crown-logo.svg">
        <div class="scroll-down ">
            <img class="vert-move" src="<?php echo get_template_directory_uri(); ?>/assets/images/scroll-down.svg">
        </div>
    </section>

    <main id="main" class="site-main">

        <section id="about" class="scroll-animations pt-75 pb-75">
            <div class="text-center">
                <p class="sub-heading">OAB/DF 64294</p>
                <h2 class="heading mb-30">Dr. Paulo Henrique de Sá</h2>

	            <?php
                $i = 0;
                if( have_rows('presentation_lines', 'option') ):
                    while( have_rows('presentation_lines', 'option') ) : the_row(); ?>

                        <div class="card-wrapper about mb-75 mt-75">
                            <div class="card clear-fix <?php echo ($i % 2 == 0) ? '' : 'image-align-right' ?>">
                                <div class="card-image animated invisible" data-class-in="<?php echo ($i % 2 == 0) ? 'fadeInLeft' : 'fadeInRight' ?>" data-class-out="">
	                                <?php
	                                $image = get_sub_field('image');
	                                if( !empty( $image ) ): ?>
                                        <img class="call-to-action" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	                                <?php endif; ?>
                                    <!--<img class="call-to-action" src="<?php /*echo get_template_directory_uri(); */?>/assets/images/bg-1.jpg">-->
                                </div>
                                <div class="card-body animated invisible" data-class-in="<?php echo ($i % 2 == 0) ? 'fadeInRight' : 'fadeInLeft' ?>" data-class-out="">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p><?php the_sub_field('description'); ?></p>
                                    <p>
                                        <a class="see-more" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text_link'); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>

		            <?php $i++; endwhile;
                endif;
                ?>

            </div>
            <div class="invisible footer-sep" style="width: 100%; height: 1px;"></div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
