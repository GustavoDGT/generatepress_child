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
<section class="grid-100 grid-parent wip-40 skinny-section" id="wip-presentation">
  <div class="grid-100 mobile-100 align-justify grid-parent">
    <div class="grid-40 prefix-5 sufix-5 mobile-grid-100 mobile-prefix-0 mobile-sufix-0">
      <h2>NUESTRA MISIÓN</h2>
      <div class="wip-normal-line"></div>
      <p>ITSYSTEMS PERU es una organización de profesionales orientados a la transformación digital empresarial que brinda soluciones y servicios relacionados, siendo un activo colaborador y socio estratégico de vanguardia tecnológica.</p>
    </div>
    <div class="grid-40 prefix-5 sufix-5 mobile-grid-100 mobile-prefix-0 mobile-sufix-0">
      <h2>NUESTRA VISIÓN</h2>
      <div class="wip-normal-line"></div>
      <p>Al 2020 nos posicionaremos como una entidad referente a nivel nacional en educación, poseedores de un gran mecanismo de servicio que forma, produce y difunde conocimiento al desarrollo de la economía digital.</p>
    </div>
  </div>
</section>
<section id="wip-valors" class="grid-100 wip-40 tiny-section bg-skyblue">
  <div class="grid-100 mobile-grid-100 align-center wip-20-bottom">
		<h2>NUESTROS VALORES</h2>
		<div class="wip-header-line"></div>
  </div>
  <div class="grid-100 mobile-grid-100 grid-parent">
    <ul class="wip-list">
      <li>Lealtad</li>
      <li>Actitud</li>
      <li>Proactividad</li>
      <li>Probidad</li>
      <li>Justicia</li>
      <li>Disciplina</li>
    </ul>
  </div>
</section>
<section id="wip-clients" class="grid-100 wip-40-top wip-20-bottom align-center tight-section">
  <div class="grid-100 mobile-grid-100 wip-20-bottom">
    <h3 class="title-sponsors">¿QUIÉNES CONFÍAN EN NOSOTROS?</h3>
  </div>
  <div id="its-clients" class="its-clients slider-home owl-carousel owl-theme">
    <div class="client item">
      <img data-src="<?php echo $upload_path . '/2018/07/1_aje.png'; ?>" alt="" class="owl-lazy client-item"/>
    </div>
    <div class="client item">
      <img data-src="<?php echo $upload_path . '/2018/07/2_lindley.png'; ?>" alt="" class="owl-lazy client-item"/>
    </div>
    <div class="client item">
      <img data-src="<?php echo $upload_path . '/2018/07/3_malaga.png'; ?>" alt="" class="owl-lazy client-item"/>
    </div>
    <div class="client item">
      <img data-src="<?php echo $upload_path . '/2018/07/4_ism.png'; ?>" alt="" class="owl-lazy client-item"/>
    </div>
    <div class="client item">
      <img data-src="<?php echo $upload_path . '/2018/07/5_gandules_inc.png'; ?>" alt="" class="owl-lazy client-item"/>
    </div>
    <div class="client item">
      <img data-src="<?php echo $upload_path . '/2018/07/6_ipesa.png'; ?>" alt="" class="owl-lazy client-item"/>
    </div>
    <div class="client item">
      <img data-src="<?php echo $upload_path . '/2018/07/7_dent_import.png'; ?>" alt="" class="owl-lazy client-item"/>
    </div>
    <div class="client item">
      <img data-src="<?php echo $upload_path . '/2018/07/8_globaltec.png'; ?>" alt="" class="owl-lazy client-item"/>
    </div>
  </div>
</section>