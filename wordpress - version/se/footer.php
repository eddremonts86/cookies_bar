<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package businessup
 */
?>
<!--==================== businessup-FOOTER AREA ====================-->
  <?php 
  $businessup_footer_widget_background = get_theme_mod('businessup_footer_widget_background');
  $businessup_overlay_footer_widget_control = get_theme_mod('businessup_overlay_footer_widget_control'); 
   if($businessup_footer_widget_background != '') { ?>
<footer style="background-image:url('<?php echo esc_url($businessup_footer_widget_background);?>');">
  <?php } else { ?>
<footer> 
  <?php } ?>
  <div class="overlay" style="background-color: <?php echo esc_attr($businessup_overlay_footer_widget_control);?>;">
  <!--Start businessup-footer-widget-area-->
  <?php if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
  <div class="businessup-footer-widget-area">
    <div class="container">
      <div class="row">
        <?php  dynamic_sidebar( 'footer_widget_area' ); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <!--End businessup-footer-widget-area-->
  <div class="businessup-footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
			<p>© Copyright, SverigeStream.se 2018 | <a href="/sekretesspolicy" rel="nofollow">Sekretesspolicy</div><a></p>
		</div>
        <div class="col-md-6 col-sm-6 text-right text-center-xs">
          <?php if ( has_nav_menu( 'social' ) ) : ?>
          <nav class="businessup-social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'businessup' ); ?>">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'social',
                'menu_class'     => 'social-links-menu',
                'depth'          => 1,
                'link_before'    => '<span class="screen-reader-text">',
                'link_after'     => '</span>' . businessup_include_svg_icons( array( 'icon' => 'chain' ) ),
              ) );
            ?>
          </nav><!-- .social-navigation -->
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</footer>
</div>
<?php 
wp_footer(); 
include "footer_bar_cookies_page.php";
?>

</body>
</html>