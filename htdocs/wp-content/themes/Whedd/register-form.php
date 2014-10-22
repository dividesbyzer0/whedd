<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="login" id="theme-my-login<?php $template->the_instance(); ?>">
  <?php $template->the_errors(); ?>
  <form name="registerform" id="registerform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'register' ); ?>" method="post">
    <div id='signupForm1' class="loginForm circle center-parent hide hide-right">
      <img id="logoSignupForm1" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
      <div class="center-child">
        <?php get_template_part( 'signup', 'form1'); ?>
      </div>
    </div>
    <div id='signupForm2' class="loginForm circle center-parent hide hide-right">
      <img id="logoSignupForm2" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
      <div class="center-child">
        <?php get_template_part( 'signup', 'form2'); ?>
      </div>
    </div> 
    <div id='signupForm3' class="loginForm circle center-parent hide hide-right">
      <img id="logoSignupForm3" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
      <div class="center-child">
        <?php get_template_part( 'signup', 'form3'); ?>
      </div>
    </div>
    <div id='signupForm4' class="loginForm circle center-parent hide hide-right">
      <img id="logoSignupForm4" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
      <div class="center-child">
        <?php get_template_part( 'signup', 'form4'); ?>
      </div>
    </div>
    <div id='signupForm5' class="loginForm circle center-parent hide hide-right">
      <img id="logoSignupForm5" class="logoImg" title="whedd" src="<?php bloginfo('template_directory'); ?>/images/My-logo-light.png" alt="whedd">
      <div class="center-child">
        <?php get_template_part( 'signup', 'form5'); ?>
      </div>
    </div>
    </form>
  <?php $template->the_action_links( array( 'register' => false ) ); ?>
</div>
