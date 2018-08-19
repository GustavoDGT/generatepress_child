<?php
/**
 * Template Name: Home Page
 *
 * @package GeneratePress
 * @since WIP 1.0
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

	<div id="primary" <?php generate_content_class();?>>
		<main id="main" <?php generate_main_class(); ?>>
			<?php do_action('generate_before_main_content'); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_article_schema( 'CreativeWork' ); ?>>
					<div class="inside-article">
						<?php do_action( 'generate_before_content'); ?>
						
						<?php if ( generate_show_title() ) : ?>
							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
							</header><!-- .entry-header -->
						<?php endif; ?>
						
						<?php do_action( 'generate_after_entry_header'); ?>
						<div class="entry-content" itemprop="text">
							<?php  
								// Include the page content template.
								get_template_part( 'content', 'home' );
							?>

						</div><!-- .entry-content -->
						<?php do_action( 'generate_after_content'); ?>
					</div><!-- .inside-article -->
				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>
			<?php do_action('generate_after_main_content'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
do_action('generate_sidebars');
get_footer();