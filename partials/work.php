<div class="uk-width-medium-1-3">
    <div class="uk-thumbnail uk-overlay-hover" >
        <figure class="uk-overlay">
        	<?php the_post_thumbnail('jgbnd-featured'); ?>
            <figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></figcaption>
            <a class="uk-position-cover" href="<?= get_permalink(); ?>"></a>
        </figure>
    </div>
    <h3 class="uk-margin-bottom-remove uk-text-center">
    	<a href="<?= get_permalink(); ?>"><?php the_title() ?></a>
    </h3>
</div>