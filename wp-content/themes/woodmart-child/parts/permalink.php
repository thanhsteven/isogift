<?php 
// Them .html vao cac trang
function add_html_to_page_permalink() {
  global $wp_rewrite;
  $wp_rewrite->page_structure = str_replace("%pagename%", "%pagename%.html", $wp_rewrite->get_page_permastruct());
  flush_rewrite_rules();
}

// Lay url cua trang hien tai
function get_current_url() {
  global $wp;
  return home_url($wp->request);
}
add_action('init', 'add_html_to_page_permalink');


// Thêm .html vào các đường dẫn của danh mục bài viết (post categories)
// function add_html_to_category_permalink($category_link, $category_id) {
//   // Thêm ".html" vào cuối liên kết của danh mục
//   if (strpos($category_link, '.html') === false) {
//       $category_link = rtrim($category_link, '/') . '.html';
//   }
//   return $category_link;
// }
// // Gắn hàm add_html_to_category_permalink vào bộ lọc 'category_link'
// add_filter('category_link', 'add_html_to_category_permalink', 10, 2);

// Cập nhật lại quy tắc viết lại để áp dụng thay đổi
// function update_category_rewrite_rules($wp_rewrite) {
//   foreach ($wp_rewrite->rules as $key => $rule) {
//       // Thêm ".html" vào các quy tắc liên quan đến danh mục
//       if (strpos($key, 'category') !== false) {
//           $wp_rewrite->rules[$key . '.html'] = $rule;
//           unset($wp_rewrite->rules[$key]);
//       }
//   }
// }

// Gắn hàm update_category_rewrite_rules vào sự kiện 'generate_rewrite_rules'
// add_action('generate_rewrite_rules', 'update_category_rewrite_rules');
?>