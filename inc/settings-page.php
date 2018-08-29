<?php


// Add settings page
add_submenu_page(
  'options-general.php'
  ,$page_title
  ,$menu_title
  ,$capability
  ,$slug
  ,$callback );
