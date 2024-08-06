<?php
function style_for_each_page () {
  echo '<link rel="stylesheet" href="'.get_stylesheet_directory_uri().'/style/layout.css" type="text/css" />';
  $current_page_id = get_queried_object_id();
  switch ($current_page_id) {
    case 13:
      echo '<link rel="stylesheet" href="'.get_stylesheet_directory_uri().'/style/homepage.css" type="text/css" />';
      break;
  }
};
add_action('wp_head', 'style_for_each_page');
?>