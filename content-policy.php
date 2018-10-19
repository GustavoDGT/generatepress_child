<?php
/**
 * The template used for displaying page content in page-inhouse.php
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>
<section class="grid-100 grid-parent wip-40 skinny-section" id="wip-presentation">
  <div class="grid-100 mobile-100 align-justify grid-parent">
    <?php the_content(); ?>
  </div>
</section>
