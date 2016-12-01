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
            <?php $postURL = urlencode(get_permalink()); $postTitle = get_the_title(); ?>

            <h4><i class="uk-icon-share"></i> Share this post</h4>
            <a class="uk-button btn-primary uk-button-large uk-border-rounded btn"
                href="https://www.facebook.com/sharer.php?u=<?= $postURL ?>&amp;t=<?= $postTitle ?>" target="blank">
                <i class="uk-icon-facebook"></i> Facebook
            </a>
            <a class="uk-button btn-info uk-border-rounded uk-button-large btn"
                href="https://twitter.com/share?url=<?= $postURL ?>&amp;text=<?= $postTitle ?>&amp;via=jgbneatdesign" target="blank">
                <i class="uk-icon-twitter"></i> Twitter
            </a>
        </div>
    </div>
</article>

<br>
<br>

<div class="related-posts uk-text-center">
    <h3><i class="uk-icon-pencil"></i> Other Posts You Might Enjoy Reading</h3>

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