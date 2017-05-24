<?php

function wpb_custom_new_menu() {
  register_nav_menu('mg-nav',__( 'Machine Gun Navigation' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

?>