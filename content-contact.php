<?php

/**

 * The template used for displaying page content in page-home.php

 *

 * @package GeneratePress

 */



if ( ! defined( 'ABSPATH' ) ) {

    exit; // Exit if accessed directly.

}

$uploads = wp_upload_dir();

$upload_path = $uploads['baseurl'];

?>

<section class="grid-100 grid-parent wip-40 bg-skyblue skinny-section" id="tab-enroll">

	<div class="grid-100 grid-parent align-center">

		<h2>SOLICITAR MÁS INFORMACIÓN</h2>

		<div class="wip-header-line"></div>

		<p>Regístrate y obtén más información del curso.</p>

	</div>

	<div class="wip-form grid-100 grid-parent skinny-section">

		<div class="content">

			<?php echo do_shortcode( '[contact-form-7 id="621" title="Contact Form"]' ); ?>

		</div>

	</div>

</section>

<section class="grid-100 grid-parent align-center wip-40" id="wip-contact-info">

	<div class="grid-100">

		<h2>DATOS DE CONTACTO</h2>

		<div class="wip-header-line"></div>

		<p>También puedes contactarnos por: </p>

	</div>

	<div class="grid-50 mobile-grid-100 grid-parent wip-20-top">

		<div class="grid-50 tablet-grid-50 mobile-grid-50">

			<i class="fa fa-phone fa-2x wip-right wip-circle" aria-hidden="true"></i>

		</div>

		<div class="grid-50 tablet-grid-50  mobile-grid-50 wip-10-top align-left">

			<h3>TELÉFONO</h3>

			<h4>(01) 6575073</h4>

		</div>

	</div>

	<div class="grid-50 mobile-grid-100 grid-parent wip-20-top">

		<div class="grid-50 tablet-grid-50 mobile-grid-50">

			<i class="fa fa-mobile fa-2x wip-right wip-circle" aria-hidden="true"></i>

		</div>

		<div class="grid-50 tablet-grid-50  mobile-grid-50 wip-10-top align-left">

			<h3>MÓVIL</h3>

			<h4>973258439</h4>

		</div>

	</div>

	<div class="grid-50 mobile-grid-100 grid-parent wip-20-top">

		<div class="grid-50 tablet-grid-50 mobile-grid-50">

			<i class="fa fa-envelope fa-2x wip-right wip-circle" aria-hidden="true"></i>

		</div>

		<div class="grid-50 tablet-grid-50 mobile-grid-50 wip-10-top align-left">

			<h3>CORREO ELECTRÓNICO</h3>

			<h4>info@itsystems.pe</h4>

		</div>

	</div>

	<div class="grid-50 mobile-grid-100 grid-parent wip-social">

		<a href="https://www.facebook.com/ItSystemsPe" target="_blank">

			<i class="fa fa-2x fa-facebook"> </i>

		</a>
		
		<a href="https://www.linkedin.com/company/itsystems-peru-s.a.c/" target="_blank">

			<i class="fa fa-2x fa-linkedin"> </i> 

		</a>

		<a href="https://www.youtube.com/channel/UC6A-lRU8A9Ejdy38Tl4yXUQ/" target="_blank">

			<i class="fa fa-2x fa-youtube"> </i>

		</a>

	</div>

</section>

<?php include( WIP_PLUGIN_PATH . 'front/parts/sponsors.php' ); ?>

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