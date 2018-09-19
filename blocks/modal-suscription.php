<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$uploads = wp_upload_dir();
$upload_path = $uploads['baseurl'];
?>
<div id="wip-modal-suscription" class="overlay_modal">
  <button class="close close-modal" data-id="wip-modal-suscription">X</button>
  <div class="modal_cm grid-100 mobile-grid-100 grid-parent wip-40 align-center bg-section" style="background-image: url( '<?php echo $upload_path . '/2018/09/bg-suscription.jpg'; ?>' )">
    <div class="grid-100 mobile-grid-100 grid-parent">
      <h2 class="wip-title"><span class="wip-title-init">DESCARGAR PACK</span> <span class="wip-title-final">PARA APRENDER MAS SOBRE SAP</span></h2>
    </div>
    <div class="wip-form wip-20-top grid-100 mobile-grid-100 grid-parent small-section">
      <div class="content">
        <?php echo do_shortcode( '[contact-form-7 id="1067" title="Suscription Form"]' ); ?>
      </div>
    </div>
  </div>
  <div class="overlay_modal_closer" data-frame="modal_mobile" data-id="wip-modal-suscription"></div>
</div>
