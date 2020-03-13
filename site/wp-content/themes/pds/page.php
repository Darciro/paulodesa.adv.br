<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paulodesa
 */

get_header();
?>

    <section id="intro" class="jumbotron">
        <div class="centered text-center">
            <p class="sub-heading">Subtexto aqui</p>
            <h2 class="heading"><?php the_title(); ?></h2>
        </div>
	    <?php if(has_post_thumbnail()): ?>
            <div class="thumbnail-bg" style="background: url(<?php the_post_thumbnail_url(); ?>)"></div>
	    <?php else: ?>
            <img class="call-to-action right" src="<?php echo get_template_directory_uri(); ?>/assets/images/justice-logo.svg">
	    <?php endif; ?>
    </section>

    <main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

    </main>

<?php
get_footer();
