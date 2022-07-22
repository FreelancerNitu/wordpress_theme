<?php 
//The template displaying for attachment
get_header(); 

?>
<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php get_template_part('template_part/post_setup'); ?>
        <?php var_export($post);?>
        <P><a href=""></a></p>
      </div>
    </div>
  </div>

</section>
<div class=" container">
  <div class="row">
    <div class="col-md-12">
      <h1 style="color:red;">Template: Attachment.php</h1s>
    </div>
  </div>
</div>
<?php 
//The main template footer
get_footer(); 

?>