<?php
/*
* Template Name: Login Page
*/
?>

<?php get_header(); ?>

<?php
$args = array('redirect' => get_permalink( get_page( $page_id_of_member_area ) ) );

wp_login_form( $args );
?>

<?php 
get_sidebar(); 
get_footer(); 
?>
