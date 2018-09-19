<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$uploads = wp_upload_dir();
$upload_path = $uploads['baseurl'];
?>
<div id="wip-modal-suscription" class="grid-100 wip-40 align-center bg-section skinny-section" style="background-image: url( '<?php echo $upload_path . '/2018/09/bg-suscription.jpg'; ?>' )">
  <div class="grid-100 mobile-grid-100">
    <div class="grid-100 mobile-grid-100 grid-parent frase">
      <h2>DESCARGAR PACK <span class="text-next">PARA APRENDER MAS SOBRE SAP</span></h2>
    </div>
    <div class="wip-form grid-100 grid-parent">
      <div class="content">
        <?php echo do_shortcode( '[contact-form-7 id="358" title="Contacto home"]' ); ?>
      </div>
    </div>
  </div>
</div>