<aside id="main">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        echo "<section><h4>";
        the_title();
        echo "</h4>";
        the_content();
        echo "</section>";
	} // end while
} // end if
?>
</aside>