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
<section class="grid-100 grid-parent wip-40 skinny-section bg-skyblue" id="wip-presentation">
  <div class="grid-100 mobile-100 align-justify grid-parent">
    <div class="grid-40 prefix-5 sufix-5 mobile-grid-100 mobile-prefix-0 mobile-sufix-0">
      <h3>MISIÓN</h3>
      <p>ITSYSTEMS PERU es una organización de profesionales orientados a la transformación digital empresarial que brinda soluciones y servicios relacionados, siendo un activo colaborador y socio estratégico de vanguardia tecnológica.</p>
    </div>
    <div class="grid-40 prefix-5 sufix-5 mobile-grid-100 mobile-prefix-0 mobile-sufix-0">
      <h3>VISIÓN</h3>
      <p>Al 2020 nos posicionaremos como una entidad referente a nivel nacional en educación, poseedores de un gran mecanismo de servicio que forma, produce y difunde conocimiento al desarrollo de la economía digital.</p>
    </div>
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