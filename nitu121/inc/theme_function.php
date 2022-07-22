<?php

/*****************************
 * Theme functions 
 * **************************/
function nitu_customizer_register($wp_customize){
  //Header area function
  $wp_customize->add_section('nitu_header_area', array(
    'title'=>__('Header Area', 'nitu121'),
    'description'=> 'If you intrested to change or update your logo, You can do',
  ));
  $wp_customize->add_setting('nitu_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nitu_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you intrested to change or update your logo, You can do',
    'section' => 'nitu_header_area',
    'setting' => 'nitu_logo',
  )));

    /*************************
     * Menu position option
     ************************/
    $wp_customize->add_section('nitu_menu_option', array(
      'title'=>__('Menu Position Option', 'nitu121'),
      'description'=> 'If you intrested to change your menu position, You can do',
    ));
    $wp_customize->add_setting('nitu_menu_position', array(
      'default' => 'Right Menu',
    ));
    $wp_customize->add_control('nitu_menu_position', array(
      'label' => 'Menu Position',
      'description' => 'Select your menu position',
      'setting' => 'nitu_menu_position',
      'section' => 'nitu_menu_option',
      'type' => 'radio',
      'choices' => array(
        'left_menu' => 'Left Menu',
        'right_menu' => 'Right Menu',
        'center_menu' => 'Center Menu',
      )
    ));
  
    /**********************
     * Footer option
     *********************/
    $wp_customize->add_section('nitu_footer_option', array(
      'title'=>__('Footer Option', 'nitu121'),
      'description'=> 'If you intrested to change or update your footer setting, You can do it',
    ));
    $wp_customize->add_setting('nitu_copyright_section', array(
      'default' => '&copy; Copyrights 2022 || Nitu121 ',
    ));
    $wp_customize->add_control('nitu_copyright_section', array(
      'label' => 'Copyright Text',
      'description' => 'If need you can udate your copyrght section here',
      'setting' => 'nitu_copyright_section',
      'section' => 'nitu_footer_option',
      
    ));
    
    /****************************
     * Theme Colors option
    ****************************/

    $wp_customize-> add_section('nitu_colors', array(
      'title' =>__('Theme Colors', 'nitu121'),
      'description' => 'If need you can change your theme color',
    ));
      
    $wp_customize-> add_setting('nitu_bg_color', array(
      'default' => '#ffffff',
    ));

    $wp_customize-> add_control(new WP_customize_color_control($wp_customize, 'nitu_bg_color', array(
      'label' => 'Backgrond Color',
      'section' => 'nitu_colors',
      'setting' => 'nitu_bg_color',
    )));
      
    $wp_customize-> add_setting('nitu_primary_color', array(
      'default' => '#ea1a70',
    ));

    $wp_customize-> add_control(new WP_customize_color_control($wp_customize, 'nitu_primary_color', array(
      'label' => 'Primary Color',
      'section' => 'nitu_colors',
      'setting' => 'nitu_primary_color',
    )));
    
  }
  add_action('customize_register', 'nitu_customizer_register');

  function nitu_theme_color_customize(){
    ?>
<style>
body {
  background: <?php echo get_theme_mod('nitu_bg_color');
  ?>
}

:root {
  --pink: <?php echo get_theme_mod('nitu_primary_color');
  ?>
}
</style>
<?php
  }

  add_action('wp_head', 'nitu_theme_color_customize');
  