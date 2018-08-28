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
<section class="grid-100 grid-parent wip-40 skinny-section align-center" id="wip-presentation">
		<h2>PRESENTACIÓN</h2>
		<div class="wip-header-line"></div>
		<p>Nuestra experiencia empresarial nos ha permitido observar cómo el capital humano se ha<br> vuelto un pilar esencial en las organizaciones. Sabemos que el aporte de un profesional<br> capacitado se traduce en una mayor competitividad de la organización en el mercado. Por<br> ello ponemos a disposición nuestras capacitaciones inhouse o incompany que se adaptan<br> según las necesidades de cada compañía.</p>
	<?php if( ! empty( $video ) ): ?>
		<iframe width="560" height="315" src="<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	<?php endif; ?>
</section>
<section class="grid-100 grid-parent wip-40 skinny-section" id="wip-proposal">
	<div class="grid-100 grid-parent align-center">
		<h2>PROPUESTA ACADEMICA</h2>
		<div class="wip-header-line"></div>
		<p><b>Nuestra experticia en tecnologías de información nos permite proponer las siguientes propuestas integrales:</b></p>
	</div>
	<div class="grid-100 grid-parent">
		<ul class="wip-list">
			<li>Transformación digital</li>
			<li>Soluciones ERP (SAP)</li>
			<li>Soluciones software para la gestión empresarial</li>
		</ul>
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

<section class="grid-100 grid-parent wip-40 bg-skyblue skinny-section" id="tab-enroll">

	<div class="grid-100 grid-parent align-center">

		<h2>SOLICITAR UNA PROPUESTA</h2>

		<div class="wip-header-line"></div>

	</div>

	<div class="wip-form grid-100 grid-parent">

		<div class="content">

			<?php echo do_shortcode( '[contact-form-7 id="662" title="Inhouse Form"]' ); ?>

		</div>

	</div>

</section>