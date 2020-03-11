<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paulodesa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 388px;">
	<header class="entry-header">
        <div class="centered text-center">
            <p class="sub-heading">Subtítulo aqui</p>
            <?php the_title( '<h1 class="entry-title heading">', '</h1>' ); ?>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/justice-logo.svg">
	</header>

	<?php pds_post_thumbnail(); ?>

	<div class="entry-content-wrapper">
        <div class="entry-content" style="margin-top: 100vh; min-height: 50vh;">
            <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pds' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'pds' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

    <div class="invisible footer-sep" style="width: 100%; height: 1px; margin-bottom: 150px"></div>
</article><!-- #post-<?php the_ID(); ?> -->
