<?php
// Filter hook - If you want to change the product title output 
function new_product_title( $name, $instance ) { 
    // You can apply your logic here 
    return $name; 
};      
// add the filter 
add_filter( 'woocommerce_product_title', 'new_product_title', 10, 2 ); 


// Action hook
function new_footer( ) {
	echo "Welcome to this website!";
}
add_action( 'wp_footer', 'new_footer' );

?>