<article id="post-<?php the_ID(); ?>" <?php post_class('thin-border'); ?>>
    <header class="entry-header">
        <div class="uk-panel-box uk-block-default">
            <h1 class="uk-text-center no-margin"><?php single_post_title(); ?></h1>
        </div>
        <!-- Featured Image -->
        <?php the_post_thumbnail('jgbnd-large', ['class'=>'featured-image']); ?>
    </header>

    <div class="uk-panel-box uk-block-default">

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

        <!-- Sharing buttons -->
        <hr class="uk-article-divider">
        <div class="box-meta">
            <p class="uk-article-meta">
                <i class="uk-icon-calendar"></i> <span>4 months ago</span> in
                <a href="category/articles"><i class="uk-icon-folder-open"></i> Articles</a>
            </p>
            <p class="uk-article-meta ng-scope">Tagged:
                <a href="tag/bootstrap">
                    <i class="uk-icon-tags"></i> Bootstrap
                </a>
            </p>
        </div>

        <hr class="uk-article-divider">

        <div>Share this post:
            <a class="uk-button btn-primary uk-button-large uk-border-rounded" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fblog.jgbnd.com.dev%2Fpost%2Fnon-ipsum-est-maiores-molestiae-occaecati-rerum&amp;t=Non ipsum est maiores molestiae occaecati rerum" target="blank">
                <i class="uk-icon-facebook"></i> Facebook
            </a>
            <a class="uk-button btn-info uk-border-rounded uk-button-large" href="https://twitter.com/share?url=http%3A%2F%2Fblog.jgbnd.com.dev%2Fpost%2Fnon-ipsum-est-maiores-molestiae-occaecati-rerum&amp;text=Non ipsum est maiores molestiae occaecati rerum&amp;via=jgbneatdesign" target="blank">
                <i class="uk-icon-twitter"></i> Twitter
            </a>
        </div>

        <hr class="uk-article-divider">

        <!-- Comment -->
        <?php if (comments_open() || get_comments_number()): ?>
            <h3 class="uk-text-center">Got something to say? Comment your thought.</h3>
            <?php comments_template(); ?>
        <?php endif; ?>
    </div>
</article>