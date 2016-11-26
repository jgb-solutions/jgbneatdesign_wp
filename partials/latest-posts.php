<section id="posts" class="uk-block uk-block-default">
  	<div class="uk-container uk-container-center">

     	<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1" >
     			<h2 class="uk-text-center">Latest posts from our blog</h2>
			</div>

			<?php
				$query = new WP_Query(['showposts' => 3]);



				if ($query->have_posts()): ?>
					<?php while ( $query->have_posts() ): $query->the_post(); ?>
			        <div class="uk-width-medium-1-3 uk-text-center">
		                <div class="uk-thumbnail uk-overlay-hover">
		                    <figure class="uk-overlay">
		                        <?php the_post_thumbnail(); ?>
		                        <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
		                            <div>
		                                <a href="<?= get_permalink(); ?>" class="uk-icon-button uk-icon-pencil"></a>
		                            </div>
		                        </figcaption>
		                    </figure>
		                </div>
		                <h3 class="uk-margin-bottom-remove">
		                	<a href="<?= get_permalink(); ?>"><?php the_title() ?></a></h3>
			            </div>
					<?php endwhile;?>
					<?php wp_reset_postdata();
				else: ?>
					// no posts found
				<?php endif ?>
     	</div>
    </div>
</section>