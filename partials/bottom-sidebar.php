<section id="posts" class="uk-block uk-block-secondary uk-contrast">
  	<div class="uk-container uk-container-center">
  		<div class="uk-width-medium-3-4 uk-container-center">
  			<div class="uk-grid">
				<div class="uk-width-medium-1-4">
					<ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav="">
						<li class="uk-nav-header"><i class="uk-icon-folder-open"></i> Categories</li>

						<?php $categories = get_categories(['orderby' => 'name','order' => 'ASC']);
							foreach ($categories as $category):?>
								<li>
									<a href="<?= get_term_link($category->term_id)?>">
										<?= $category->name . ' (' . $category->count . ')'; ?>
									</a>
								</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="uk-width-medium-1-4">
					<ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav="">
						<li class="uk-nav-header"><i class="uk-icon-tag"></i> Tags</li>

						<?php $tags = get_tags(['orderby' => 'name','order' => 'ASC']);
							foreach ($tags as $tag):?>
								<li>
									<a href="<?= get_term_link($tag->term_id)?>">
										<?= $tag->name . ' (' . $tag->count . ')'; ?>
									</a>
								</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="uk-width-medium-1-4">
					<ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav="">
						<li class="uk-nav-header"><i class="uk-icon-pencil"></i> Latest Posts</li>

						<?php
							$query = new WP_Query(['showposts' => 5]);

							if ($query->have_posts()) {
								while ($query->have_posts()): $query->the_post(); ?>

									<li>
										<a href="<?= get_permalink(); ?>">
											<?php the_title() ?>
										</a>
									</li>

								<?php endwhile; ?>

								<?php wp_reset_postdata(); ?>

							<?php } else {
								echo '<li>There are no liosts yet.</li>';
						}?>
					</ul>
				</div>
				<div class="uk-width-medium-1-4">
					<aside id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</aside><!-- #secondary -->
				</div>
  			</div>
  		</div>
    </div>
</section>