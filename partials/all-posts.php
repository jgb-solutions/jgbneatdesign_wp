<section id="posts" class="uk-block">
  	<div class="uk-container uk-container-center">

     	<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1" >
				<?php $page = get_query_var( 'paged', 1 ) > 1 ? '(page ' . $paged . ')' : ''; ?>
     			<h1 class="uk-text-center">
     				<i class="uk-icon-pencil"></i> <?php single_post_title(); ?> <small><?= $page; ?></small>
     			</h1>
			</div>

			<?php if (have_posts()): ?>
				<?php while (have_posts()): the_post(); ?>
			        <?php require('post.php'); ?>
				<?php endwhile;?>
				<?php wp_reset_postdata(); ?>

				<div class="uk-width-1-1">
					<ul class="uk-pagination">
					    <li class="uk-pagination-previous">
					    	<?= get_previous_posts_link( );?>
					    </li>
						<li class="uk-pagination-next">
					    	<?= get_next_posts_link( );?>
						</li>
					</ul>
				</div>
			<?php else: ?>
			<p>There are no posts.</p>
			<?php endif ?>
     	</div>
    </div>
</section>