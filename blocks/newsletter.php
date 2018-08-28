<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<section id="wip-contact" class="grid-100 wip-40-top wip-20-bottom align-center bg-section skinny-section parallax-enabled" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/images/bg-contact.jpg'; ?>')">
  <div class="grid-100 mobile-grid-100">
    <div class="grid-100 grid-parent">
      <h2>SUSCRÍBETE AHORA</h2>
      <div class="wip-header-white-line"></div>
      <p>Regístrate para recibir nuestra programación, tutoriales y recursos en video en tu correo.</p>
    </div>
    <div class="wip-form grid-100 grid-parent">
      <div class="content">
        <?php echo do_shortcode( '[contact-form-7 id="358" title="Contacto home"]' ); ?>
      </div>
    </div>
  </div>
</section>