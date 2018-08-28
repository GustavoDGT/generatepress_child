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

$courses_args = array( 'post_type' => LP_COURSE_CPT, 
  'orderby' => 'menu_order', 
  'order' => 'ASC', 
);

?>
<section id="wip-slider">
  <?php echo do_shortcode('[WIP_SLIDER]'); ?>
</section>
<section id="wip-about" class="align-center grid-100 wip-40 skinny-section">
  <div class="grid-100 mobile-grid-100">
    <h2>¿QUIÉNES SOMOS?</h2>
    <div class="wip-header-line"></div>
    <p>Formamos y conectamos a profesionales en soluciones tecnológicas orientadas<br> a la gestión e innovación continua de organizaciones empresariales.</p>
  </div>
  <div class="grid-33 mobile-grid-100 prefix-33 sufix-33 mobile-prefix-0 mobile-sufix-0">
    <div class="sponsor item">
      <img src="<?php echo $upload_path . '/2018/08/11_camara_comercio.png'; ?>"/>
    </div>
  </div>
  <div class="grid-100 mobile-grid-100 wip-20">
    <a class="wip-btn" href="<?php echo get_bloginfo( 'url' ) . '/nosotros'; ?>">Ver más</a>
  </div>
</section>
<section id="wip-courses" class="align-center grid-100 wip-40 bg-skyblue tight-section">
  <div class="grid-100 mobile-grid-100">
    <h2>NUESTROS CURSOS</h2>
    <div class="wip-header-line"></div>
    <div id="wip-tabs-courses">
      <?php 
      $courses_args['tax_query'] = array(
        array(
          'taxonomy' => 'course_category',
          'field' => 'slug',
          'terms' => 'sap-business-one'
        )
      );
      $bo_query = new WP_Query($courses_args);
      if ($bo_query->have_posts()):
      ?>
        <input id="tab-sap-bo" type="radio" name="wip-tabs" checked>
        <label for="tab-sap-bo"><i class="fa fa-sapbo fa-2x"></i></label>
      <?php 
      endif;
      $courses_args['tax_query'] = array(
        array(
          'taxonomy' => 'course_category',
          'field' => 'slug',
          'terms' => 'sap-erp'
        )
      );
      $erp_query = new WP_Query($courses_args);
      if ($erp_query->have_posts()):
      ?>
        <input id="tab-sap-erp" type="radio" name="wip-tabs" <?php if(!$bo_query->have_posts()) echo 'checked'; ?>>
        <label for="tab-sap-erp"><i class="fa fa-saperp fa-2x"></i></label>
      <?php endif; ?>
      <?php if ($bo_query->have_posts()): ?>
        <div id="sap-bo" class="tab-section learn-press-courses slider-home owl-carousel owl-theme fadeIn animated">
          <?php while ($bo_query->have_posts()): $bo_query->the_post(); 
            $date_start = get_post_meta( get_the_ID(), '_lp_date_start', true );
            $f_image_id = get_post_meta( get_the_ID(), WIP_PREFIX . '_thumb_image', true );
            $f_image = wp_get_attachment_image_src( $f_image_id, 'full' );
            ?>
            <div class="lp_course item">
              <div class="course-thumbnail"> 
                <?php if (!empty($f_image)): ?>
                  <a href="<?php the_permalink(); ?>"> 
                    <img class="owl-lazy" data-src="<?php echo $f_image[0]; ?>" alt="<?php echo get_post_meta( $f_image_id, '_wp_attachment_image_alt', true); ?>" title="<?php echo get_the_title( $f_image_id ); ?>" /> 
                  </a>
                <?php endif; ?>
              </div>
              <div class="thim-course-content">
                <div class="course-content">
                  <h4 class="course-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?></a>
                  </h4>
                  <p class="course-description"><?php echo get_the_excerpt(); ?></p>
                </div>
                <?php if( ! empty( $date_start ) && is_array( $date_start ) ): ?>
                  <div class="course-meta">
                    <time class="date-display-single" property="dc:date" datatype="xsd:dateTime" datetime="<?php echo $date_start[0]; ?>">Próximo inicio: <?php echo convert_spanish_date( $date_start[0], 'tiny' ); ?></time>  
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>         
        </div>
      <?php endif; ?>
      <?php if ($erp_query->have_posts()): ?>
        <div id="sap-erp" class="tab-section learn-press-courses slider-home owl-carousel owl-theme animated fadeIn">
          <?php while ($erp_query->have_posts()): $erp_query->the_post(); 
            $date_start = get_post_meta( get_the_ID(), '_lp_date_start', true );
            $f_image_id = get_post_meta( get_the_ID(), WIP_PREFIX . '_thumb_image', true );
            $f_image = wp_get_attachment_image_src( $f_image_id, 'full' );
            ?>
            <div class="lp_course item">
              <div class="course-thumbnail"> 
                <?php if (!empty($f_image)): ?>
                  <a href="<?php the_permalink(); ?>"> 
                    <img class="owl-lazy" data-src="<?php echo $f_image[0]; ?>" alt="<?php echo get_post_meta( $f_image_id, '_wp_attachment_image_alt', true); ?>" title="<?php echo get_the_title( $f_image_id ); ?>" /> 
                  </a>
                <?php endif; ?>
              </div>
              <div class="thim-course-content">
                <div class="course-content">
                  <h4 class="course-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?></a>
                  </h4>
                  <p class="course-description"><?php echo get_the_excerpt(); ?></p>
                </div>
                <?php if( ! empty( $date_start ) ): ?>
                  <div class="course-meta">
                    <time class="date-display-single" property="dc:date" datatype="xsd:dateTime" datetime="<?php echo $date_start[0]; ?>">Próximo inicio: <?php echo convert_spanish_date( $date_start[0], 'tiny' ); ?></time>  
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>     
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!--<section id="wip-events" class="align-center grid-100 wip-40 skinny-section">
  <div class="grid-100 mobile-grid-100">
    <h2>EVENTOS</h2>
    <div class="wip-header-line"></div>
    <p>Conozca nuestro calendario<br>¡Manténgase actualizado!</p>
  </div>
  <div class="grid-100">
    <div class="grid-25 mobile-grid-100">
      <div class="thim-widget-icon-box">
        <div class="wrapper-box-icon has_custom_image text-center image_box">
          <div class="smicon-box iconbox-top">
            <div class="boxes-icon">
              <img src="https://educationwp.thimpress.com/demo-edtech/wp-content/uploads/sites/46/2015/06/course-2-400x300.jpg" alt="icon2" title="icon2">
            </div>
            <div class="content-inner">
              <div class="sc-heading article_heading">
                <h4><a href="#">Programa Internacional Avanzado en Asociaciones Público Privadas</a></h4>
              </div><div class="desc-icon-box"><div class="desc-content">Experiencia e innovación del sector privado contribuyendo al desarrollo del país
              </div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grid-25 mobile-grid-100">
      <div class="thim-widget-icon-box">
        <div class="wrapper-box-icon has_custom_image text-center image_box">
          <div class="smicon-box iconbox-top">
            <div class="boxes-icon">
              <img src="https://educationwp.thimpress.com/demo-edtech/wp-content/uploads/sites/46/2015/06/course-2-400x300.jpg" alt="icon2" title="icon2">
            </div>
            <div class="content-inner">
              <div class="sc-heading article_heading">
                <h4><a href="#">Programa Internacional Avanzado en Asociaciones Público Privadas</a></h4>
              </div><div class="desc-icon-box"><div class="desc-content">Experiencia e innovación del sector privado contribuyendo al desarrollo del país
              </div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grid-25 mobile-grid-100">
      <div class="thim-widget-icon-box">
        <div class="wrapper-box-icon has_custom_image text-center image_box">
          <div class="smicon-box iconbox-top">
            <div class="boxes-icon">
              <img src="https://educationwp.thimpress.com/demo-edtech/wp-content/uploads/sites/46/2015/06/course-2-400x300.jpg" alt="icon2" title="icon2">
            </div>
            <div class="content-inner">
              <div class="sc-heading article_heading">
                <h4><a href="#">Programa Internacional Avanzado en Asociaciones Público Privadas</a></h4>
              </div><div class="desc-icon-box"><div class="desc-content">Experiencia e innovación del sector privado contribuyendo al desarrollo del país
              </div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grid-25 mobile-grid-100">
      <div class="thim-widget-icon-box">
        <div class="wrapper-box-icon has_custom_image text-center image_box">
          <div class="smicon-box iconbox-top">
            <div class="boxes-icon">
              <img src="https://educationwp.thimpress.com/demo-edtech/wp-content/uploads/sites/46/2015/06/course-2-400x300.jpg" alt="icon2" title="icon2">
            </div>
            <div class="content-inner">
              <div class="sc-heading article_heading">
                <h4><a href="#">Programa Internacional Avanzado en Asociaciones Público Privadas</a></h4>
              </div><div class="desc-icon-box"><div class="desc-content">Experiencia e innovación del sector privado contribuyendo al desarrollo del país
              </div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="grid-100 wip-40">
      <a class="wip-btn" href="acerca-de-educacion-ejecutiva">VER MÁS PRÓXIMOS INICIOS</a>
  </div>
</section>-->
<section id="wip-formation" class="grid-100 grid-parent align-center">
  <div class="grid-50 mobile-grid-100 grid-parent wip-40">
    <h2>¿POR QUÉ <b>APRENDER SAP</b> CON NOSOTROS?</h2>
    <div class="wip-header-line"></div>
      <p class="">Razones para acompañarte en tu camino profesional</p>
    <div class="wip-table wip-table--2cols">
      <div class="wip-cell-right">
        <i class="fa fa-lightbulb-o fa-2x icon-service wip-circle" aria-hidden="true"></i>
      </div>
      <div class="wip-cell-left">
        <h4 class="wip-icon-text">INNOVACIÓN CONTINUA</h4>
      </div>
      <div class="wip-cell-right">
        <i class="fa fa-line-chart fa-2x icon-service wip-circle" aria-hidden="true"></i>
      </div>
      <div class="wip-cell-left">
        <h4 class="wip-icon-text">CALIDAD INFORMATIVA</h4>
      </div>
      <div class="wip-cell-right">
        <i class="fa fa-handshake-o fa-2x icon-service wip-circle" aria-hidden="true"></i>
      </div>
      <div class="wip-cell-left">
        <h4 class="wip-icon-text">EXPERIENCIA DOCENTE</h4>
      </div>
    </div>
    <!--<div class="wip-50">
      <a class="wip-btn" href="acerca-de-educacion-ejecutiva">CONÓCENOS MÁS</a>
    </div>-->
  </div>
  <div class="bg-formation grid-50 mobile-grid-100 grid-parent" style="background: url( '<?php echo $upload_path . '/2018/07/aprende-nosotros.jpg'; ?>' )">
    <!--<i class="fa fa-video fa-2x icon-service wip-circle" aria-hidden="true"></i>-->
  </div>
</section>
<section id="wip-testimonial" class="align-center grid-100 mobile-grid-100 tight-section bg-blue wip-40 ">
  <h2>EXPERIENCIAS DE ÉXITO</h2>
  <div class="wip-header-white-line"></div>
  <p>La satisfacción de nuestros estudiantes es nuestra mejor carta de presentación.</p>
  <div id="testimonial" class="slider-home owl-carousel owl-theme">
                <div id="item-1" class="item">
                  <div class="text-caption">
                    <img class="person-img" src="<?php echo $upload_path . '/2018/08/marcos-1.png'; ?>" />
                    <blockquote>
                      "Les recomiendo estudiar en Itsystems Perú porque brindan ejercicios bien prácticos aplicados a la realidad dentro del ambiente productivo en SAP. Asimismo, les brindan apoyo para poder practicar las 24 horas, sin importar el lugar, ni la distancia y sobretodo asesorías a todo nivel. Es un excelente lugar para empezar en el mundo del SAP."
                    </blockquote>
                    <!--<p><b>Taller en Proyectos Ágiles con Scrum</b></p>-->
                    <p>
                      <span class="person-name">Marcos Irving Mera Sanchez</span><br>
                      Ing. CIP Sistemas - IT Professional
                    </p>
                  </div>
                </div>
                <div id="item-2" class="item">
                  <div class="text-caption">
                    <img class="person-img" src="<?php echo $upload_path . '/2018/08/jorge-1.png'; ?>" />
                    <blockquote>
                      "Excelente el curso de SAP Business One, el profesor Joel Campos es un buen profesional, un grupo reducido de estudiantes, recibí un gran apoyo tanto de él, como de la parte administrativa, muy recomendado."
                    </blockquote>
                    <p>
                      <span class="person-name">Jorge Arturo Romero Chuquimantari</span><br>
                      Analista de Sistemas
                    </p>
                  </div>
                </div>
  </div>
</section>
<section id="wip-news" class="grid-100 wip-40-top wip-20-bottom tight-section bg-skyblue">
  <div class="grid-75 mobile-grid-100">
    <h2>ARTÍCULOS ESPECIALIZADOS</h2>
    <div class="wip-normal-line"></div>
    <p>Infórmate más sobre nuestras últimas noticias</p>
  </div>
  <div class="wip-view-all grid-25 mobile-grid-100">
    <a class="wip-btn" href="<?php echo get_bloginfo( 'url' ) . '/blog'; ?>"><i class="fa fa-arrow-right"></i> Ver todos</a>
  </div>
  <?php get_template_part('blocks/news'); ?>
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
<section id="wip-sponsors" class="grid-100 wip-20-top wip-40-bottom align-center tiny-section">
  <div class="grid-100 mobile-grid-100 wip-20-bottom">
    <h3 class="title-sponsors">ITSYSTEMS CUENTA CON EL RESPALDO DE</h3>
  </div>
  <?php include( WIP_PLUGIN_PATH . 'front/parts/sponsors.php' ); ?>
</section>
<section id="wip-contact" class="grid-100 wip-40-top wip-20-bottom align-center bg-section skinny-section" style="background: url('<?php echo get_stylesheet_directory_uri() . '/images/bg-contact.jpg'; ?>')">
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

