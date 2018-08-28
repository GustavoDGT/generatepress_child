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
<section class="grid-100 grid-parent wip-40 skinny-section" id="wip-sap-business">
  <div class="grid-100 grid-parent align-center wip-20-bottom">
  	<h2>SAP BUSINESS ONE</h2>
  	<div class="wip-header-line"></div>
  	<p>Obtenga mayor control sobre su empresa o subsidiaria con SAP Business One.<br> Optimice sus procesos usando un software ERP que crece con usted</p>
    <img src="<?php echo $upload_path . '/2018/08/sap-business-one.png'; ?>">
  </div>
  <div class="grid-70 mobile-grid-100 grid-parent prefix-15 sufix-15 mobile-prefix-0 mobile-sufix-0">
    <p><b>Sap Business One</b></p>
    <div class="grid-60 mobile-grid-100 grid-parent">
      <p>Aumente el control sobre su pequeña empresa con software diseñado para crecer con usted. Optimice sus procesos clave, obtenga más información estratégica sobre su negocio y tome decisiones basadas en información en tiempo real para poder impulsar un crecimiento rentable.</p>
    </div>
    <div class="grid-40 mobile-grid-100 grid-parent">
      <ul>
        <li>Implementación on-premise o en la nube</li>
        <li>Business intelligence integrada</li>
        <li>Integración con la plataforma de SAP HANA</li>
        <li>Implementación rápida</li>
      </ul>
    </div>
  </div>
</section>
<section class="grid-100 grid-parent wip-40 skinny-section align-center bg-gray" id="wip-benefits-2">
	<div class="grid-100 grid-parent">
		<h2>BENEFICIOS</h2>
		<div class="wip-header-line"></div>
		<p>Gestione su empresa con SAP Business One</p>
	</div>
  <div class="grid-90 mobile-grid-100 grid-parent prefix-5 sufix-5 mobile-prefix-0 mobile-sufix-0">
  	<div class="grid-33 mobile-grid-100 tiny-column">
      <div class="wip-10-bottom">
  		  <i class="fa-4x fa fa-dollar"></i>
      </div>
      <p><b>Opere y mantenga su software ERP de manera accesible</b></p>
      <p>Reduzca el costo de gestión de su empresa, desde las finanzas, las compras, el inventario, las ventas y las relaciones con los clientes hasta la gestión de proyectos, las operaciones y RR. HH.</p>
  	</div>
    <div class="grid-33 mobile-grid-100 tiny-column">
      <div class="wip-10-bottom">
        <i class="fa-4x fa fa-lightbulb-o"></i>
      </div>
      <p><b>Gestione todas las necesidades de su departamento con una solución</b></p>
      <p>Obtenga una visibilidad clara y un control completo de cada aspecto de su pequeña empresa. Capture información crítica para un acceso inmediato y úsela en toda la empresa.</p>
    </div>
    <div class="grid-33 mobile-grid-100 tiny-column">
      <div class="wip-10-bottom">
        <i class="fa-4x fa fa-bar-chart"></i>
      </div>
      <p><b>Empodere el crecimiento de su empresa con información estratégica profunda</b></p>
      <p>Asegure el logro de grandes sueños y grandes metas. Obtenga un único panorama de su empresa en un instante con una interfaz flexible, modular, poderosa y simple.</p>
    </div>
  </div>
</section>
<section class="grid-100 grid-parent wip-40-top skinny-section" id="wip-sap-business">
  <div class="grid-100 grid-parent align-center wip-20-bottom">
    <h2>FUNCIONALIDADES</h2>
    <div class="wip-header-line"></div>
    <img src="<?php echo $upload_path . '/2018/08/sap-business-one-device.png'; ?>">
  </div>
  <div class="grid-90 mobile-grid-100 grid-parent prefix-5 sufix-5 mobile-prefix-0 mobile-sufix-0">
    <div class="grid-33 mobile-grid-100 tiny-column">
      <p><b>Gestión financiera</b></p>
      <p>Automatice tareas de contabilidad y conduzca actividades bancarias con una solución ERP. Una operaciones financieras con otros procesos para acelerar las transacciones y mejorar el flujo de efectivo.</p>
    </div>
    <div class="grid-33 mobile-grid-100 tiny-column">
      <p><b>Gestión de ventas y clientes</b></p>
      <p>Gestione todo el proceso de ventas y el ciclo de vida del cliente de manera eficiente. Obtenga una visión integrada de sus prospectos y clientes para poder comprender y satisfacer mejor sus necesidades.</p>
    </div>
    <div class="grid-33 mobile-grid-100 tiny-column">
      <p><b>Control de compras e inventario</b></p>
      <p>Acceda a información estratégica precisa sobre envíos entrantes y salientes, niveles de inventario y ubicación de productos. Opere informes en tiempo real sobre actualizaciones, valuaciones, disponibilidad e impacto de precios.</p>
    </div>
  </div>
</section>
<section id="wip-clients" class="grid-100 wip-40 align-center tiny-section">
  <div class="grid-100 mobile-grid-100 wip-20-bottom">
		<h2>NUESTROS CLIENTES</h2>
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

			<?php echo do_shortcode( '[contact-form-7 id="714"]' ); ?>

		</div>

	</div>

</section>