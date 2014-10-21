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
?>
<div id="page"> 
  <header class="row page-header">
    <div class="grid col-1">
    </div>
    <div class="grid col-5">
      <img id="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
    </div>
    <nav class="grid col-1">
      <ul>
        <li class="signup"><a href="">Sign Up</a></li>
        <li class="navbar"> | </li>
        <li class="login-nav"><a href="">Log In</a></li>            
      </ul>
    </nav>
  </header>
  <section id="content" class="site-content">
    <div id="primary"> <!-- main site content-->
      <div id="main" class="row">
        <div class="grid col-7">
          <div id='login' class="loginForm circle center-parent hide-right">
            <?php echo do_shortcode( '[theme-my-login show_title="0"]' ) ?>
          </div>
          <?php echo do_shortcode( '[theme-my-login show_title="0" default_action="register"]' ) ?>
        </div>
      </div>
    </div>
  </section>
  <?php
    get_sidebar();
    get_footer();
  ?>
</div>