<?php 
//The template displaying for 404 Error page (not found).

get_header(); 

?>
<!-- Main section Starts here -->
<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 error_page">
        <p>404 Error - Page not Found</p>
        <h1>Looks like something was wrong</h1>
        <div class="error_search">
          <?php get_search_form(); ?>
        </div>
        <a href="<?php echo home_url(); ?>" class="homepage">Homepage</a>
      </div>
    </div>
  </div>
</section>
<!-- Main section Ends here -->

<?php 
//The main Template footer
get_footer(); 

?>