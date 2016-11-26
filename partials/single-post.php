<section id="posts" class="uk-block">
  	<div class="uk-container uk-container-center">

     	<div class="uk-grid" data-uk-grid-margin>
     		<div class="uk-width-medium-3-4 uk-container-center">
				<?php while (have_posts()): the_post();
			        require('post-content.php'); ?>

					<div class="uk-width-medium-1-1">
						<?php if (comments_open() || get_comments_number()): ?>
							<h3>Got something to say? Comment your thought.</h3>
							<?php comments_template(); ?>
					 	<?php endif; ?>
					</div>
				<?php endwhile;?>

				<?php wp_reset_postdata(); ?>

				<div class="uk-width-1-1">
        			<hr class="uk-article-divider">
					<ul class="uk-pagination">
					    <li class="uk-pagination-previous">
					    	<?= get_previous_post_link();?>
					    </li>
						<li class="uk-pagination-next">
					    	<?= get_next_post_link();?>
						</li>
					</ul>
				</div>
			</div>

			<div class="uk-width-medium-1-4 uk-hidden-small">
				<div class="uk-sticky-placeholder"
					style="height: 115px; margin: 0px;">
					<div class="uk-panel uk-panel-box" data-uk-sticky="{
						media: 768,
						boundary: true,
						top:50}" style="margin: 0px;">
					<ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav="">
						<li class="uk-nav-header">Categories</li>
						<li ng-repeat="category in blog.categories | orderBy:'term.name'" class="ng-scope">
							<a href="category/tutorials" class="ng-binding">
								<i class="uk-icon-folder-open"></i> Tutorials (1)
							</a>
						</li>
						<li class="uk-nav-divider"></li>

						<li class="uk-nav-header">Tags</li>
						<li><a href="tag/uikit" class="ng-binding"><i class="uk-icon-tag"></i>UIkit (1)</a></li>
					</ul>
					</div>
				</div>
			</div>
     	</div>
    </div>
</section>