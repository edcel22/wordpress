<?php 

	
	while(have_posts()) {
		the_post();  ?>

		<h1><a href="<?php the_permalink( $post ); ?>"><?php the_title(); ?></a></h1>
		<p><?php the_content(); ?></p>
		<hr>

	<?php }

?>