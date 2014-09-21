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
$args = array('redirect' => get_permalink( get_page( $page_id_of_member_area ) ) );
?>

  <section id="content"> <!-- main site content-->
    <div id="main" class="row">
      <div class="grid col-7">
        <div id='login' class="loginForm circle center-parent">
          Form 1
          <div class="center-child">
            <?php wp_login_form($args); ?>
            <?php if(isset($_GET['login']) && $_GET['login'] == 'failed') {?>
            <div id="login-error" class="error">
              <p>Login failed: You have entered an incorrect Username or password, please try again.</p>
            </div>
            <?php } ?>
          </div>
        </div>
        <div id='signupForm1' class="loginForm circle center-parent">
          <img id="logoForm" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
          <div class="center-child">
            <?php get_template_part( 'signup', 'form1'); ?>
          </div>
        </div>
        <div id='signup-2' class="loginForm circle center-parent">
          Form 3
          <div class="center-child">
            <?php wp_login_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    get_sidebar();
    get_footer();
  ?>
