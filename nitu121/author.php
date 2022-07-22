<?php 
// The template displaying for author

//The main template header
get_header(); 
?>

<h1>This is Author page</h1>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php the_content();?>
      </div>
    </div>
  </div>

</section>

<?php 
//The main template footer
get_footer(); 

?>