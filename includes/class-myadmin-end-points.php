<?php

add_action( 'init', function() {
    add_rewrite_endpoint( 'users', EP_ROOT );
} );

add_action( 'template_redirect', function() {
    
    if(is_singular() && get_query_var('users')) {
    
    include plugin_dir_path( __FILE__ ) . 'templates/users.php';
    
    die;
    
    }
} );

?>