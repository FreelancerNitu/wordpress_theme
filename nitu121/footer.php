<?php 

  // This template for displaying the footer
  
  ?>

<footer id="footer_area">
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar('footer-2'); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar('footer-3'); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Copyrights section starts here -->
  <section id="copyright_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><?php echo get_theme_mod('nitu_copyright_section');?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- Copyrights section ends here -->

</footer>
<!-- The main template footer calling here -->
<?php wp_footer(); ?>
</body>

</html>