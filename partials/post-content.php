<article id="post-<?php the_ID(); ?>" <?php post_class('thin-border'); ?>>
    <header class="entry-header">
        <!-- Featured Image -->
        <?php the_post_thumbnail('jgbnd-large', ['class'=>'featured-image']); ?>
    </header>

    <div class="uk-panel-box uk-block-default">

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

        <hr class="uk-article-divider">

        <div class="uk-text-center">

            <h4><i class="uk-icon-share"></i> Share this post</h4>

            <?php inc('partials/sharing'); ?>
        </div>
    </div>
</article>

<br>
<br>

<div class="related-posts uk-text-center">
    <h3 class="fancy-title uk-h2"><i class="uk-icon-pencil"></i> Other Posts You Might Enjoy Reading</h3>

    <?php require('related-posts.php') ?>
</div>

<br>
<br>

<!-- Comment -->
<div class="uk-panel-box uk-block-default thin-border">
    <?php if (comments_open() || get_comments_number()): ?>
        <h4 class="uk-text-center">Got something to say? Comment your thought.</h4>
        <?php comments_template(); ?>
    <?php endif; ?>
</div>