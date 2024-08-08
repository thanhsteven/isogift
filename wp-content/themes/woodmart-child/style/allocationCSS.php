<?php
function style_for_each_page() {
  echo '<link rel="stylesheet" href="'.esc_url(get_stylesheet_directory_uri()).'/style/thanh-layout.css" type="text/css" />';
  $current_page_id = get_queried_object_id();
  if($current_page_id === 13) {
		echo '<link rel="stylesheet" href="'.esc_url(get_stylesheet_directory_uri()).'/style/homepage.css" type="text/css" />';
	}
}
add_action('wp_enqueue_scripts','style_for_each_page');
?>