<?php 

	$frontpage_slideshow = get_field('frontpage_slideshow');

	get_header();

    echo do_shortcode($frontpage_slideshow);

	get_footer(); 

?>