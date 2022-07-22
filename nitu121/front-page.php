<?php

//The template displaying for font-page

get_header();
?>

<!-- Slider section starts here -->
<section id="slider_area">
  <div class="slider">
    <?php
     query_posts('post_type=slider&post_status=publish&posts_per_page=4&order=ASC&paged='. get_query_var('post')); 
      
      if(have_posts()) : 
         while(have_posts()) : the_post();
    ?>
    <div>
      <?php echo the_post_thumbnail('slider'); ?>
    </div>

    <?php 
      endwhile;
      endif;
      ?>
  </div>
</section>
<!-- Slider section ends here -->

<!-- Banner section starts here -->
<div id="banner_area">
  <section id="banner">
    <?php dynamic_sidebar('banner'); ?>
  </section>
</div>

<!-- Banner section ends here -->


<!-- Home Page Post starts here -->
<div id=" homepage_post">
  <div class="containe">
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('homepage-1'); ?>
      </div>
    </div>
  </div>
</div>
<!-- Home Page Post ends here -->

<!-- Custom post starts here -->
<section id="service_area">
  <div class="container">
    <div class="row">
      <div class="title">
        <h1>Our Services</h1>
      </div>
      <?php 
      query_posts('post_type=service&post_status=publish&posts_per_page=-1&order=ASC&paged='. get_query_var('post')); 
      
      //jode post thaka tahola post dhakaw ar na thakla error dhakaw
      if(have_posts()) : 
        while(have_posts()) : the_post();
      ?>

      <div class="col-md-4">
        <div class="child_service">
          <!-- Title anar jonno -->
          <h2><?php the_title(); ?></h2>
          <!-- Showing Date and time -->
          <p><i class="fas fa-calendar"></i></i><?php echo the_time('D, j - F Y');?>
            <span>At</span> <i class="fas fa-clock"></i><?php echo the_time('g:i a');?>
          </p>
          <!-- Image anar jonno-->
          <?php echo the_post_thumbnail('service'); ?>
          <!-- Content anar jonno the_excerpt -->
          <?php the_excerpt(); ?>
        </div>
      </div>

      <?php 
      endwhile;
      endif;
      ?>
    </div>
  </div>
</section>
<!-- Custom post ends here -->

<?php get_footer(); ?>