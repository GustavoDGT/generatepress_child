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
?>
<section class="grid-100 grid-parent wip-40 skinny-section align-center" id="wip-presentation">
		<h2>NOSOTROS</h2>
		<div class="wip-header-line"></div>
		<div class="grid-50 mobile-grid-100">
      <h3>MISIÓN</h3>
      <p>ITSYSTEMS PERU es una organización de profesionales orientados a la transformación digital empresarial que brinda soluciones y servicios relacionados, siendo un activo colaborador y socio estratégico de vanguardia tecnológica.</p>
    </div>
    <div class="grid-50 mobile-grid-100">
      <h3>VISIÓN</h3>
      <p>Al 2020 nos posicionaremos como una entidad referente a nivel nacional en educación, poseedores de un gran mecanismo de servicio que forma, produce y difunde conocimiento al desarrollo de la economía digital.</p>
    </div>
</section>
<section id="wip-clients" class="grid-100 wip-40 align-center tiny-section">
  <div class="grid-100 mobile-grid-100 wip-20-bottom">
		<h2>CLIENTES CORPORATIVOS</h2>
		<div class="wip-header-line"></div>
  </div>
  <div id="its-clients" class="its-clients slider-home owl-carousel owl-theme">
    <div class="client item">
      <img src="<?php echo $upload_path . '/2018/07/1_aje.png'; ?>" alt="" class="client-item"/>
    </div>
    <div class="client item">
      <img src="<?php echo $upload_path . '/2018/07/2_lindley.png'; ?>" alt="" class="client-item"/>
    </div>
    <div class="client item">
      <img src="<?php echo $upload_path . '/2018/07/3_malaga.png'; ?>" alt="" class="client-item"/>
    </div>
    <div class="client item">
      <img src="<?php echo $upload_path . '/2018/07/4_ism.png'; ?>" alt="" class="client-item"/>
    </div>
    <div class="client item">
      <img src="<?php echo $upload_path . '/2018/07/5_gandules_inc.png'; ?>" alt="" class="client-item"/>
    </div>
    <div class="client item">
      <img src="<?php echo $upload_path . '/2018/07/6_ipesa.png'; ?>" alt="" class="client-item"/>
    </div>
    <div class="client item">
      <img src="<?php echo $upload_path . '/2018/07/7_dent_import.png'; ?>" alt="" class="client-item"/>
    </div>
    <div class="client item">
      <img src="<?php echo $upload_path . '/2018/07/8_globaltec.png'; ?>" alt="" class="client-item"/>
    </div>
  </div>
</section>
<section id="wip-contact" class="grid-100 wip-40-top wip-20-bottom align-center bg-section skinny-section" style="background: url('<?php echo WIP_PLUGIN_URL . 'images/bg-contact.jpg'; ?>')">

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