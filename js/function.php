?php
//* Do NOT include the opening php tag
//* Enqueue Ionicons
add_action( 'wp_enqueue_scripts', 'bg_enqueue_ionicons' );
function bg_enqueue_ionicons() {
	wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), CHILD_THEME_VERSION );
}
