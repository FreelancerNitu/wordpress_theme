<?php 
//The template Displaying for Post

/****************************
 * The main template Header
 ****************************/
get_header(); 

?>
<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <?php get_template_part('template_part/post_setup'); ?>
        <div id="comment_area">
          <?php if(comments_open()) : ?>
          <?php comments_template(); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-3">
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>

</section>

<!-- Page Name -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Template: Single.php</h1>
    </div>
  </div>
</div>
<?php 
/****************************
 * The main template Footer
 ****************************/
get_footer(); 

?>