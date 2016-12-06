<section id="posts">
	<div class="uk-panel-box uk-block-primary title-box">
		<div class="uk-container uk-container-center">
			<div class="uk-width-1-1">
				<?php
					$paged = get_query_var('paged', 1);
					$page = $paged > 1 ? '(page ' . $paged . ')' : ''; ?>
				<h1 class="uk-text-center no-margin uk-text-contrast">
					<i class="uk-icon-search"></i> <?php printf( esc_html__( 'Search Results for: %s', 'jgbnd' ), '<span>' . get_search_query() . '</span>' ); ?> <small><?= $page; ?></small>
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
				<div class="uk-width-1-1 uk-text-center">
					<p>We didn't find anything for <?= get_search_query() ?>. Sorry!</p>
					<p>Please use the search form to look for something else or go back to the <a href="/">homepage</a>.</p>
				</div>
			<?php endif ?>
     	</div>
    </div>

    <br>

</section>