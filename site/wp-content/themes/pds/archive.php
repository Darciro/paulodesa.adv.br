<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paulodesa
 */

get_header();
?>

    <section id="intro" class="jumbotron">
        <div class="centered text-center">
            <p class="sub-heading"><?php the_archive_description(); ?></p>
            <h2 class="heading"><?php the_archive_title(); ?></h2>
        </div>
        <img class="call-to-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/justice-crown-logo.svg">
        <div class="scroll-down ">
            <img class="vert-move" src="<?php echo get_template_directory_uri(); ?>/assets/images/scroll-down.svg">
        </div>
    </section>

    <main id="main" class="site-main pt-30">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('card-wrapper mb-75 mt-75'); ?>>
                <div class="card list-item clear-fix">
                    <div class="card-image">
	                    <?php pds_post_thumbnail(); ?>
                    </div>
                    <div class="card-body">
                        <p class="post-time text-uppercase"><?php the_time('F j, Y'); ?></p>
                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
                        <!--<p><a href="<?php /*the_permalink(); */?>">Leia mais</a></p>-->
                        <?php
                        $post_tags = get_the_tags();
                        $separator = ' ';
                        if (!empty($post_tags)) {
                            echo '<div class="sep"></div>';
	                        foreach ($post_tags as $tag) {
		                        $output .= '<a class="tags text-uppercase" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
	                        }
	                        echo trim($output, $separator);
                        } ?>
                    </div>
                </div>
            </article>

			<?php endwhile; ?>

            <div class="posts-navigation-wrapper">
	            <?php the_posts_navigation(); ?>
            </div>

            <?php else :
			    get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    </main>

<?php
get_footer();
