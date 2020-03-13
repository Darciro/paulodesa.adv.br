<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paulodesa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clear-fix'); ?>>

	<div class="entry-content-wrapper">
        <div class="entry-content">
            <p class="post-time text-uppercase"><?php the_time('F j, Y'); ?></p>
            <h3 class="heading"><?php the_title(); ?></h3>

            <?php
            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pds' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pds' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>
	</div>

	<footer class="entry-footer">
		<?php // pds_entry_footer(); ?>
	</footer>
</article>
