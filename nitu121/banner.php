<?php 
// The template displaying for Banner

  //The main template header
  get_header(); 
?>

<div id="banner_area">
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('banner'); ?>
        </div>
      </div>
    </div>
  </section>
</div>

<?php wp_footer(); ?>
</body>

</html>