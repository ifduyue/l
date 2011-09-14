<?php
function l_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'l_page_menu_args' );

if ( function_exists('register_sidebar') )
register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
));


if ( function_exists('register_sidebar') )
register_sidebar(array(
    'name' => 'Index Description',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
));

?>
