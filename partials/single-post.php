<section id="posts">
		<div class="uk-panel-box uk-block-primary title-box">
  			<div class="uk-container uk-container-center">
				<div class="uk-width-1-1">
    				<h1 class="uk-text-center no-margin uk-text-contrast"><?php single_post_title(); ?></h1>
					<br>
		            <p class="uk-text-center">
		            	<small>
			            	<span class="box-meta uk-block-secondary uk-contrast">
				                <i class="uk-icon-calendar"></i>
				                <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>

				                <!-- the post category -->
				                / in
				                <?php
				                	$category = get_the_category()[0];
				                	$cat_link = get_category_link($category->term_id);
				                ?>
				                <a href="<?= $cat_link ?>"><i class="uk-icon-folder-open"></i> <?= $category->cat_name ?></a>

								<!-- the post tags -->
				            	<?php
				            		$tags = get_the_tags();
				            		$tag_links_array = [];

				            		if ($tags) {
					            		echo '/ Tagged: ';

					            		foreach ($tags as $tag) {
									        $tag_links_array[] = "<a href='" . get_tag_link($tag->term_id) . "'><i class='uk-icon-tags'></i> " . $tag->name . "</a>";
									    }

									    echo implode(', ', $tag_links_array);
				            		}
								?>
			            	</span>
		            	</small>
		            </p>
				</div>
			</div>
		</div>
	<br>
  	<div class="uk-container uk-container-center">
  		<div class="uk-width-medium-3-4 uk-container-center">
	     	<div class="uk-grid" data-uk-grid-margin>
	     		<div class="uk-width-medium-1-1 uk-container-center">
					<?php while (have_posts()): the_post();
				        require('post-content.php'); ?>
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