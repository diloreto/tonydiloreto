<?php

if ( !function_exists('uncode_sidebar_al') ) :
function uncode_sidebar_al( $type, $atts, $args ){
	the_widget( $type, $atts, $args );
}
endif;
