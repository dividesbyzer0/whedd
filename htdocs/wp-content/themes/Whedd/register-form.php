<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>


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



<div class="login" id="theme-my-login<?php $template->the_instance(); ?>">
  <?php $template->the_action_template_message( 'register' ); ?>
  <?php $template->the_errors(); ?>
  <form name="registerform" id="registerform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'register' ); ?>" method="post">
    <p>
      <label for="user_login<?php $template->the_instance(); ?>"><?php _e( 'Username' ); ?></label>
      <input type="text" name="user_login" id="user_login<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'user_login' ); ?>" size="20" />
    </p>

    <p>
      <label for="user_email<?php $template->the_instance(); ?>"><?php _e( 'E-mail' ); ?></label>
      <input type="text" name="user_email" id="user_email<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'user_email' ); ?>" size="20" />
    </p>

    <?php do_action( 'register_form' ); ?>

    <p id="reg_passmail<?php $template->the_instance(); ?>"><?php echo apply_filters( 'tml_register_passmail_template_message', __( 'A password will be e-mailed to you.' ) ); ?></p>

    <p class="submit">
      <input type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" value="<?php esc_attr_e( 'Register' ); ?>" />
      <input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'register' ); ?>" />
      <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
      <input type="hidden" name="action" value="register" />
    </p>
  </form>
  <?php $template->the_action_links( array( 'register' => false ) ); ?>
</div>
