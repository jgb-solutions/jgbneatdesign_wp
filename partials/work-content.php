<article id="post-<?php the_ID(); ?>" <?php post_class('thin-border'); ?>>
    <div class="uk-panel-box uk-block-default">

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

        <hr class="uk-article-divider">

        <div class="uk-text-center">

            <h4><i class="uk-icon-share"></i> Share this work</h4>

            <?php inc('partials/sharing'); ?>
        </div>
    </div>
</article>