<?php
/**
 * Shudh About Theme
 *
 * @package Shudh
 */
 
//about theme info
add_action( 'admin_menu', 'shudh_abouttheme' );
function shudh_abouttheme() {    	
	add_theme_page( __('About Theme', 'shudh'), __('About Theme', 'shudh'), 'edit_theme_options', 'shudh_guide', 'shudh_mostrar_guide');   
} 

//guidline for about theme
function shudh_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>

<style type="text/css">
@media screen and (min-width: 800px) {
.col-left {float:left; width: 65%; padding: 1%;}
.col-right {float:right; width: 30%; padding:1%; border-left:1px solid #DDDDDD; }
}
</style>

<div class="wrapper-info">
	<div class="col-left">
   		   <div style="font-size:16px; font-weight:bold; padding-bottom:5px; border-bottom:1px solid #ccc;">
			  <?php esc_attr_e('About Theme Info', 'shudh'); ?>
		   </div>
          <p><?php esc_attr_e('Shudh is a minimal, dynamic responsive WordPress theme which suits minimalistic, commercial, corporate, eCommerce, business, startups, agencies, consulting, style, fashion, portfolio, photographer, personal, landing page, widget friendly, shortcode friendly, page builder friendly, elegant, with powerful features. Finance, law, Blogging, discussion, news and other types of sites also can be created using this template. Translation ready, multilingual, SEO ready as well as compatible with contact form, gallery and other plugins like WooCommerce.','shudh'); ?></p>
		  <a href="<?php echo SKT_PRO_THEME_URL; ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	
	<div class="col-right">			
			<div style="text-align:center; font-weight:bold;">
				<hr />
				<a href="<?php echo SKT_LIVE_DEMO; ?>" target="_blank"><?php esc_attr_e('Live Demo', 'shudh'); ?></a> | 
				<a href="<?php echo SKT_PRO_THEME_URL; ?>"><?php esc_attr_e('Buy Pro', 'shudh'); ?></a> | 
				<a href="<?php echo SKT_THEME_DOC; ?>" target="_blank"><?php esc_attr_e('Documentation', 'shudh'); ?></a>
                <div style="height:5px"></div>
				<hr />                
                <a href="<?php echo SKT_THEMES; ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>