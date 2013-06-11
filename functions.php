<?php
// Remove default fonts
function tngblog_dequeue_fonts() {
	wp_dequeue_style( 'twentytwelve-fonts' );
}
add_action( 'wp_enqueue_scripts', 'tngblog_dequeue_fonts', 11 );
?>
