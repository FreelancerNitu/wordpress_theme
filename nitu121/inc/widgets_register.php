<?php
//Sidebar register function
function nitu_widgets_register(){
  register_sidebar(array(
    'name' =>__('Main Widget Area', 'nitu121'),
    'id' => 'sidebar-1',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'nitu121'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'name' =>__('Footer 1', 'nitu121'),
    'id' => 'footer-1',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'nitu121'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'name' =>__('Footer 2', 'nitu121'),
    'id' => 'footer-2',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'nitu121'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'name' =>__('Footer 3', 'nitu121'),
    'id' => 'footer-3',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'nitu121'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  // Banner widgets
  register_sidebar(array(
    'name' =>__('Banner', 'nitu121'),
    'id' => 'banner',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'nitu121'),
    'before_widget' => '<div class="child_banner">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'name' =>__('Homepage Widget', 'nitu121'),
    'id' => 'homepage-1',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'nitu121'),
    'before_widget' => '<div class="child_home">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
}

add_action('widgets_init', 'nitu_widgets_register');