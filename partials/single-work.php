<section id="posts">
		<div class="uk-panel-box uk-block-primary title-box">
  			<div class="uk-container uk-container-center">
				<div class="uk-width-1-1">
    				<h1 class="uk-text-center no-margin uk-text-contrast"><?php single_post_title(); ?></h1>
				</div>
			</div>
		</div>
	<br>
  	<div class="uk-container uk-container-center">
  		<div class="uk-width-medium-3-4 uk-container-center">
	     	<div class="uk-grid" data-uk-grid-margin>
	     		<div class="uk-width-medium-1-2 uk-container-center">
			        <div class='thin-border'>
					    <!-- Featured Image -->
					    <?php the_post_thumbnail('jgbnd-large', ['class'=>'featured-image']); ?>

					    <div class="uk-panel-box uk-block-default">
					        <div class="entry-meta">
					            <?php the_content(); ?>
					        </div>
					    </div>
					</div>
				</div>
				<div class="uk-width-medium-1-2 uk-container-center">
					<?php while (have_posts()): the_post();
				        inc('partials/work-content'); ?>
					<?php endwhile;?>

					<?php wp_reset_postdata(); ?>

					<ul class="uk-pagination">
					    <li class="uk-pagination-previous">
					    	<?= get_previous_post_link('%link', '&laquo; %title');?>
					    </li>
						<li class="uk-pagination-next">
					    	<?= get_next_post_link('%link', '%title &raquo;');?>
						</li>
					</ul>
				</div>
	     	</div>
  		</div>
    </div>
</section>