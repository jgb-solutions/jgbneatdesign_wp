<section id="posts" class="uk-block uk-block-secondary uk-contrast">
  	<div class="uk-container uk-container-center">
  		<div class="uk-width-medium-3-4 uk-container-center">
  			<div class="uk-grid">
				<div class="uk-width-medium-1-4 uk-hidden-small">
					<ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav="">
						<li class="uk-nav-header">Categories</li>

						<?php $categories = get_categories(['orderby' => 'name','order' => 'ASC']);
							foreach ($categories as $category):?>
								<li>
									<a href="<?= get_term_link($category->term_id)?>">
										<i class="uk-icon-folder-open"></i>
										<?= $category->name . ' (' . $category->count . ')'; ?>
									</a>
								</li>
						<?php endforeach; ?>

						<li class="uk-nav-divider"></li>

						<li class="uk-nav-header">Tags</li>

						<?php $tags = get_tags(['orderby' => 'name','order' => 'ASC']);
							foreach ($tags as $tag):?>
								<li>
									<a href="<?= get_term_link($tag->term_id)?>">
										<i class="uk-icon-tag"></i>
										<?= $tag->name . ' (' . $tag->count . ')'; ?>
									</a>
								</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="uk-width-medium-1-4">
					<?php if (! is_active_sidebar('sidebar-1')) {return;}?>

					<aside id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</aside><!-- #secondary -->
				</div>
  			</div>
  		</div>
    </div>
</section>