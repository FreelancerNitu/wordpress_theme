<?php 
//The search template displaying here
get_header(); 

?>
<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div id="search_title">
          <h1 class="title">
            <?php 
              printf(__('Search Result For: %s', 'nitu121'), get_search_query());
             ?>
          </h1>
        </div>
        <?php get_template_part('template_part/blog_setup'); ?>
      </div>
      <div class="col-md-3">
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>
</section>

<?php 
//The main template footer
get_footer(); 

?>