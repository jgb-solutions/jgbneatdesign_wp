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
    	<a href="<?= get_permalink(); ?>"><?php the_title() ?></a>
    </h3>
</div>