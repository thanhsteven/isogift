<?php
// Header H1 for every page
function headerH1() {
  $current_page_id = get_queried_object_id();
  switch ($current_page_id) {
    case 13:
      echo "<h1 class='thanh-header-h1'>Đây là trang chủ</h1>";
      break;
    default:
      echo "<p class='thanh-header-h1'>Trang con</p>";
      break;
  }
}
add_shortcode('thanh_header_H1','headerH1');
?>