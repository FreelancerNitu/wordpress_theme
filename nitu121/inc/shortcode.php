<?php
/**************************************************
         WordPress shortcode
 *************************************************/

function basic_shortcode(){
  return 'This is our first shortcode';
}

add_shortcode('text', 'basic_shortcode');


/**************************************************
         Button Basic shortcode
 *************************************************/


function button_shortcode($atts, $content = null){
  $values = shortcode_atts(array(
    'url' => '#',
  ), $atts);

  return '<a class="button" href="'.esc_attr($values['url']) .'">' . $content . '</a>';
  
}

add_shortcode('button','button_shortcode');

/**************************************************
         Another Simple shortcode
 *************************************************/

function nitu_shortcode($atts, $content = null){
  $values = shortcode_atts(array(
    'url' => '#',
  ), $atts);

  return '<a class"button" href="' . esc_attr($values['url']) . '">'. $content . '</a>';
}

add_shortcode('link', 'nitu_shortcode');


/**************************************************
         Short code for custom post
 *************************************************/

function service_shortcode($atts){
  
  ob_start();
  $query = new WP_Query( array(
    'post_type' => 'service',
    'posts_per_page' => 3,
    'order' => 'ASC',
    'orderby' => 'title'
  ));
  if($query -> have_posts()) { ?>

<section id="service_area">
  <div class="container">
    <div class="row">
      <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
      <div class="col-md-4">
        <div class="child_service">
          <!-- Title anar jonno -->
          <h2><?php the_title(); ?></h2>
          <!-- Image anar jonno-->
          <?php echo the_post_thumbnail('service');  ?>
          <!-- Content anar jonno the_excerpt -->
          <?php the_excerpt(); ?>
        </div>
      </div>

      <?php 
      endwhile; wp_reset_postdata();
      ?>
    </div>
  </div>
</section>


<?php $myvariable = ob_get_clean();
return $myvariable;

}
}
add_shortcode('service', 'service_shortcode');/**************************************************
         Short code for slider custom post
 *************************************************/

function slider_shortcode($atts){
    ob_start();
    $query = new WP_Query( array(
      'post_type' => 'slider',
      'posts_per_page' => 3,
      'order' => 'ASC',
      'orderby' => 'title'
    ));
    if($query -> have_posts()) { ?>

<section id="slider_area">
  <div class="container">
    <div class="row">
      <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>

      <div class="col-md-4">
        <div class="child_service">
          <!-- Title anar jonno -->
          <h2><?php the_title(); ?></h2>
          <!-- Image anar jonno-->
          <?php echo the_post_thumbnail('service');  ?>
          <!-- Content anar jonno the_excerpt -->
          <?php the_excerpt(); ?>
        </div>
      </div>

      <?php 
        endwhile; wp_reset_postdata();
      ?>
    </div>
  </div>
</section>


<?php $myvariable = ob_get_clean();

  return $myvariable;
  
  }
  }
  add_shortcode('slider', 'slider_shortcode');
  
  ?>