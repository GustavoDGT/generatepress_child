<?php
/**
 * The template used for displaying page content in page-inhouse.php
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
global $post;

$uploads = wp_upload_dir();
$upload_path = $uploads['baseurl'];

$video = get_post_meta( $post->ID, 'wip_video', true );
?>
<section class="grid-100 grid-parent wip-40 skinny-section align-center" id="wip-solicitar">
    <h2>¿POR QUÉ SOLICITAR NUESTROS EQUIPOS?</h2>
    <div class="wip-header-line"></div>
    <p>Sabemos que los equipos informáticos son parte esencial para cualquier evento o capacitación,<br> por ello nos aseguramos que las características de los recursos puedan responder todo tipo de exigencia,<br> de tal manera poder asegurar nuestra calidad de servicio.</p>
  <?php if( ! empty( $video ) ): ?>
    <iframe width="560" height="315" src="<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  <?php endif; ?>
</section>
<section class="grid-100 grid-parent wip-40 skinny-section align-center bg-gray" id="wip-equipos">
  <div class="grid-100 grid-parent">
    <h2>EQUIPOS DISPONIBLES</h2>
    <div class="wip-header-line"></div>
  </div>
  <div class="grid-90 mobile-grid-100 grid-parent prefix-5 sufix-5 mobile-prefix-0 mobile-sufix-0">
    <div class="grid-25 mobile-grid-100 tiny-column prefix-25 mobile-prefix-0">
      <div class="wip-10-bottom">
        <i class="fa-4x fa fa-laptop wip-circle"></i>
      </div>
      <h4>Laptop</h4>
      <p>Disponemos de laptops preparadas para cubrir gran exigencia de software.</p>
    </div>
    <div class="grid-25 mobile-grid-100 tiny-column sufix-25 mobile-sufix-0">
      <div class="wip-10-bottom">
        <i class="fa-4x fa fa-file-movie-o wip-circle"></i>
      </div>
      <h4>Proyector Multimedia</h4>
      <p>Contamos con proyectores de gran capacidad de lumenes y calidad de imagen.</p>
    </div>
  </div>
</section>
<section id="wip-caracteristicas" class="grid-100 wip-40 skinny-section">
  <div class="grid-100 grid-parent align-center">
    <h2>CARACTERÍSTICAS</h2>
    <div class="wip-header-line"></div>
  </div>
  <div class="grid-90 mobile-grid-100 grid-parent prefix-5 sufix-5 mobile-prefix-0 mobile-sufix-0">
      <div class="wip-tab">
        <input id="tab-one" type="checkbox" name="wip-tabs">
        <label for="tab-one">- Laptop</label>
        <div class="tab-content">
          <ul class="wip-list">
            <li>Sistema operativo Windows 10</li>
            <li>Procesador core i7</li>
            <li>Memoria 8gb</li>
            <li>Disco duro 1tb</li>
          </ul>
        </div>
      </div>
      <div class="wip-tab">
        <input id="tab-two" type="checkbox" name="wip-tabs">
        <label for="tab-two">- Proyector</label>
        <div class="tab-content">
          <ul class="wip-list">
            <li>2000 lumenes</li>
            <li>Marca Epson</li>
            <li>Calidad de imagen de alta definición</li>
          </ul>
        </div>
      </div>
  </div>
</section>
<section class="grid-100 grid-parent wip-40 bg-skyblue skinny-section" id="tab-enroll">

  <div class="grid-100 grid-parent align-center">

    <h2>SOLICITAR UNA PROPUESTA</h2>

    <div class="wip-header-line"></div>

  </div>

  <div class="wip-form grid-100 grid-parent">

    <div class="content">

      <?php echo do_shortcode( '[contact-form-7 id="725" title="Alquiler Form"]' ); ?>

    </div>

  </div>

</section>