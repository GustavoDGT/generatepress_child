<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php generate_content_class(); ?>>
		<main id="main" <?php generate_main_class(); ?>>
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );
			?>

			<div class="inside-article">

				<?php
				/**
				 * generate_before_content hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_featured_page_header_inside_single - 10
				 */
				do_action( 'generate_before_content' );
				?>

				<header class="entry-header align-center wip-40">
					<h1 class="entry-title" itemprop="headline"><?php echo __( 'ERROR 404', 'generatepress' ); // WPCS: XSS OK. ?></h1>
				</header><!-- .entry-header -->

				<?php
				/**
				 * generate_after_entry_header hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_post_image - 10
				 */
				do_action( 'generate_after_entry_header' );
				?>

				<div class="entry-content" itemprop="text">
					<?php
					echo '<p>' . apply_filters( 'generate_404_text', __( 'It looks like nothing was found at this location. Maybe try searching?', 'generatepress' ) ) . '</p>'; // WPCS: XSS OK.

					get_search_form();
					?>
				</div><!-- .entry-content -->

				<?php
				/**
				 * generate_after_content hook.
				 *
				 * @since 0.1
				 */
				do_action( 'generate_after_content' );
				?>

			</div><!-- .inside-article -->

			<?php
			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

get_footer();
