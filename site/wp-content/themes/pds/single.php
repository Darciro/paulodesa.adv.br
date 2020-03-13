<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package paulodesa
 */

get_header();
?>

    <section id="intro" class="jumbotron">
        <div class="centered text-center">
            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
	            echo '<p class="sub-heading"><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></p>';
            }
            ?>
            <h2 class="heading"><?php the_title(); ?></h2>
        </div>
        <?php if(has_post_thumbnail()): ?>
            <div class="thumbnail-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
        <?php else: ?>
            <img class="call-to-action right" src="<?php echo get_template_directory_uri(); ?>/assets/images/justice-logo.svg">
        <?php endif; ?>
    </section>

    <main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

    </main>

<?php
get_footer();
