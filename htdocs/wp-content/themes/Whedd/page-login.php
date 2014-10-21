<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Whedd
 */

get_header(); ?>
<div id="page">
  <section id="content" class="page-login">
    <div id="primary"> <!-- main site content-->
      <div id="main" class="row">
        <div class="grid col-7">
          <div class="loginForm circle center-parent">
            <?php echo do_shortcode( '[theme-my-login show_title="0"]' ) ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
~        