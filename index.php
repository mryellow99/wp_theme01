<?php
get_header();
wp_nav_menu();
get_sidebar();

get_template_part( 'loop' );

get_footer();