<?php
$home_rss = fetch_feed( 'https://itsystems.pe/blog/home-featured-news-rss' );
$max_items = 0;
if ( ! is_wp_error( $home_rss ) ) : 
	$home_rss->enable_order_by_date( false );
  $max_items = $home_rss->get_item_quantity( 10 ); 
  $home_rss_items = $home_rss->get_items( 0, $max_items );
endif;
if ( $max_items != 0 ) : 
?>
	<ul class="grid-100 align-center grid-parent">
<?php
	foreach ($home_rss_items as $item):
		$img_url = $item->get_author()->email;	
?>      			
			<li class="wip-news grid-25 mobile-grid-100 wip-20-bottom">
	      <div class="thim-widget-icon-box">
	        <div class="wrapper-box-icon has_custom_image text-center image_box">
	          <div class="smicon-box iconbox-top">
	            <div class="boxes-icon">
	              <a title="<?php echo $item->get_title(); ?>" href="<?php echo $item->get_link(); ?>"><img src="<?php echo $img_url; ?>" title="<?php echo $item->get_title(); ?>" alt="<?php echo $item->get_title(); ?>"></a>
	            </div>
	            <div class="content-inner">
	              <div class="sc-heading article_heading">
	                <h3><a href="<?php echo $item->get_link(); ?>" title="<?php echo $item->get_title(); ?>"><?php echo $item->get_title(); ?></a><!--<span class="date-publish"><?php echo $item->get_date( 'M' ).' '.$item->get_date( 'd' ).', '.$item->get_date( 'Y' ); ?></span>--></h3>
	              </div><div class="desc-icon-box"><div class="desc-content"><?php echo $item->get_content(); ?><br>
	              <a class="more-new" title="<?php echo $item->get_title(); ?>" href="<?php echo $item->get_link(); ?>">Leer más</a></div></div>
	            </div>
	          </div>
	        </div>
	      </div>
			</li>
<?php endforeach; ?>
	</ul>	
<?php endif; ?>