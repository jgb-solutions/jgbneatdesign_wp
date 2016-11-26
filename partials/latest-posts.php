<section id="posts" class="uk-block uk-block-default">
  	<div class="uk-container uk-container-center">

     	<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1" >
     			<h2 class="uk-text-center"><i class="uk-icon-pencil"></i> Latest Posts from Our Blog</h2>
			</div>

			<?php $query = new WP_Query(['showposts' => 3]);

			if ($query->have_posts()): ?>
				<?php while ( $query->have_posts() ): $query->the_post(); ?>
			        <?php require('post.php') ?>
				<?php endwhile;?>
				<?php wp_reset_postdata(); ?>

				<div class="uk-width-1-1 uk-text-center">
					<a class="uk-button uk-button-primary uk-button-large" href="<?= get_permalink(get_option('page_for_posts' )); ?>">
						<i class="uk-icon-pencil"></i> See all our posts
					</a>
				</div>

			<?php else: ?>
			<p>There are no posts.</p>
			<?php endif ?>
     	</div>
    </div>
</section>