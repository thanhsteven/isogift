<?php
function style_for_each_page () {
  // 	Lọc CSS cho từng page
  $current_page_id = get_queried_object_id();
  if($current_page_id == 13) {
    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/style/homepage.css" type="text/css" />';
  }
};
add_action('wp_head', 'style_for_each_page');
?>