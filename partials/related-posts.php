<div class="uk-grid" data-uk-grid-margin>
	<?php
		$query = new WP_Query([
			'category_name'   => $category->slug,
			'posts_per_page'  => 3,
			'orderby'         => 'rand',
			'post__not_in'    => array( $post->ID )
			]
		);

		if ($query->have_posts()) {
			while ($query->have_posts()): $query->the_post();
		        require('post.php');
			endwhile;

			wp_reset_postdata();
		} else {
			echo "<p>There are no posts.</p>";
		}?>
</div>