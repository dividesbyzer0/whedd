<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); 
//$args = array('redirect' => get_permalink( get_page( $page_id_of_member_area ) ) );
?>
  <div id="content" class="site-content">
    <section id="primary"> <!-- main site content-->
      <div id="main" class="row">
        <div class="grid col-7">
          <div id='login' class="loginForm circle center-parent">
            <img id="logoLoginForm" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
            <div class="center-child">
              [theme-my-login instance="1"]
            </div>
          </div>
          <div id='signupForm1' class="loginForm circle center-parent">
            <img id="logoSignupForm1" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
            <div class="center-child">
              <?php get_template_part( 'signup', 'form1'); ?>
            </div>
          </div>
          <div id='signupForm2' class="loginForm circle center-parent">
            <img id="logoSignupForm2" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
            <div class="center-child">
              <?php get_template_part( 'signup', 'form2'); ?>
            </div>
          </div>
          <div id='signupForm3' class="loginForm circle center-parent">
            <img id="logoSignupForm3" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
            <div class="center-child">
              <?php get_template_part( 'signup', 'form3'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
      get_sidebar();
      get_footer();
    ?>
