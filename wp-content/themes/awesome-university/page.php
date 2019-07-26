<?php 

	
	while(have_posts()) {
		the_post();  ?>
		<h1>this is a Page , not a post</h1>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		<hr>

	<?php }

?>