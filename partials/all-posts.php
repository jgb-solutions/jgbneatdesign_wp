<section id="posts">
	<div class="uk-panel-box uk-block-primary title-box">
		<div class="uk-container uk-container-center">
			<div class="uk-width-1-1">
				<?php $page = get_query_var( 'paged', 1 ) > 1 ? '(page ' . $paged . ')' : ''; ?>
				<h1 class="uk-text-center no-margin uk-text-contrast">
					<i class="uk-icon-pencil"></i> <?php single_post_title(); ?> <small><?= $page; ?></small>
				</h1>
			</div>
		</div>
	</div>

	<br>

  	<div class="uk-container uk-container-center">
     	<div class="uk-grid" data-uk-grid-margin>
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
				<div class="uk-width-1-1 uk-text-center"><p>There are no posts yet. Please come back laler!</p></div>
			<?php endif ?>
     	</div>
    </div>

    <br>

</section>