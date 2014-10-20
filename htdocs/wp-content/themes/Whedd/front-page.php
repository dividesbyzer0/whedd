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
          <?php echo do_shortcode( '[theme-my-login login_template]' ) ?>
          <?php echo do_shortcode( '[theme-my-login register_template]' ) ?>
        </div>
      </div>
    </section>
    <?php
      get_sidebar();
      get_footer();
    ?>
