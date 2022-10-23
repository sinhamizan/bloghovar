<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogHovar
 */

?>

<footer class="footer__area site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <div class="footer__logo">
          <?php 
            if( has_custom_logo() ) {
              the_custom_logo();
            } else { ?>
              <a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo( 'name' ); ?>
              <p><?php bloginfo( 'description' ); ?></p></a>
            <?php }
          ?>

          <?php if( get_theme_mod( 'bloghovar_footer_additional_text' ) ): ?>
            <p><?php echo esc_html( get_theme_mod( 'bloghovar_footer_additional_text' ) ); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <?php 
          wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'menu_class'     => 'footer__menu',
          ) );
        ?>
      </div>
      <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <div class="footer__address">
          <?php if( get_theme_mod( 'bloghovar_footer_location' ) ): ?>
            <li><?php echo esc_html( get_theme_mod('bloghovar_footer_location') ); ?></li>
          <?php endif; ?>

            <?php if( get_theme_mod( 'bloghovar_footer_phone' ) ): ?>
              <li><a href="tel:<?php echo esc_url( get_theme_mod( 'bloghovar_footer_phone' ) ); ?>"><?php echo wp_kses_post( get_theme_mod( 'bloghovar_footer_phone' ) ); ?></a></li>
            <?php endif; ?>

            <?php if( get_theme_mod( 'bloghovar_footer_email' ) ): ?>
              <li><a href="mailto:<?php echo esc_url( get_theme_mod( 'bloghovar_footer_email' ) ); ?>"><?php echo wp_kses_post( get_theme_mod( 'bloghovar_footer_email' ) ); ?></a></li>
            <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="separate-border"></div>

    <div class="row">
      <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <div class="footer__copyright">
          <p><?php echo esc_html( get_theme_mod( 'copyright_text' ) ); ?></p>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <ul class="footer__social zi-9">
          <?php if( get_theme_mod( 'bloghovar_facebook_link' ) ): ?>
            <li><a class="btn-hover" href="<?php echo esc_url( get_theme_mod( 'bloghovar_facebook_link' ) ); ?>"><span></span> <i class="fa-brands fa-facebook-f"></i></a></li>
          <?php endif; ?>

          <?php if( get_theme_mod( 'bloghovar_linkedin_link' ) ): ?>
            <li><a class="btn-hover" href="<?php echo esc_url( get_theme_mod( 'bloghovar_linkedin_link' ) ); ?>"><span></span> <i class="fa-brands fa-linkedin-in"></i></a></li>
          <?php endif; ?>

          <?php if( get_theme_mod( 'bloghovar_twitter_link' ) ): ?>
            <li><a class="btn-hover" href="<?php echo esc_url( get_theme_mod( 'bloghovar_twitter_link' ) ); ?>"><span></span> <i class="fa-brands fa-twitter"></i></a></li>
          <?php endif; ?>

          <?php if( get_theme_mod( 'bloghovar_youtube_link' ) ): ?>
            <li><a class="btn-hover" href="<?php echo esc_url( get_theme_mod( 'bloghovar_youtube_link' )); ?>"><span></span> <i class="fa-brands fa-youtube"></i></a></li>
          <?php endif; ?>

          <?php if( get_theme_mod( 'bloghovar_instagram_link' ) ): ?>
            <li><a class="btn-hover" href="<?php echo esc_url( get_theme_mod( 'bloghovar_instagram_link' )); ?>"><span></span> <i class="fa-brands fa-instagram"></i></a></li>
          <?php endif; ?>

          <?php if( get_theme_mod( 'bloghovar_pinterest_link' ) ): ?>
            <li><a class="btn-hover" href="<?php echo esc_url( get_theme_mod( 'bloghovar_pinterest_link' )); ?>"><span></span> <i class="fa-brands fa-pinterest-p"></i></a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</footer>


<!-- Go To Top -->
<a href="#" id="scroll_top" class="scroll__top" title="Go to top"><i class="fa-solid fa-arrow-up"></i></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
