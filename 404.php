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

				<header class="entry-header align-center wip-40-top">
					<h1 class="entry-title wip-50-bottom" itemprop="headline"><?php echo __( '¡ERROR 404!', 'generatepress' ); // WPCS: XSS OK. ?></h1>
					<img src="<?php echo get_stylesheet_directory_uri() . '/images/404-plug-in.png'; ?>">
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

				<div class="entry-content wip-40-bottom tight-section align-center" itemprop="text">
					<?php
					echo '<h3 class="wip-40-bottom">' .  __( '¡Tenemos un problema! La página que buscas no se encuentra disponible o no existe.', 'generatepress' ) . '</h3>'; // WPCS: XSS OK.
					?>
					<a class="wip-btn" href="<?php echo get_bloginfo( 'url' ); ?>" title="Rumbo a casa">
						<?php echo __( 'Regresar a la página principal', 'generatepress' ); ?>
					</a>
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
