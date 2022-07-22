<?php
//Main Theme title
add_theme_support('title-tag');

//Thumbnil image area
add_theme_support('post-thumbnails', array('page', 'post', 'service', 'news'));
add_image_size('post-thumbnails', 400, 200, true);
add_image_size('service', 970, 350, true);
add_image_size('slider', 1920, 400, true);

function my_theme_setup(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

//Expect 40 word
function nitu_excerpt_more($more){
  return '<br> <br><a class="readmore" href="'.get_permalink($post->ID) . '">' . ' Read More' . '</a>';
} 
add_filter('excerpt_more', 'nitu_excerpt_more');

function nitu_excerpt_length($length){
  return 50;
}
add_filter('excerpt_length', 'nitu_excerpt_length', 999);

//Page navigation function
function nitu_pagenav(){
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if(!$current = get_query_var('paged')) $current = 1;
  $args['base'] = str_replace(9999999, '%#%', get_pagenum_link(9999999));
  $args['total'] = $max;
  $args['current'] = $current;
  $total = 1;
  $args['prev_text'] = 'Prev';
  $args['next_text'] = 'Next';
  if($max > 1) echo '</pre> 
   <div class="wp_pagenav">';
    if($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span> of </span>' . $max . '</p>';
    echo $pages . paginate_links($args);
    if($max > 1) echo '</div><pre>';

}