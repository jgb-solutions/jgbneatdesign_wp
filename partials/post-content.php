<div class="uk-width-medium-1-1">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1><?php single_post_title(); ?></h1>

            <p><?php the_post_thumbnail(); ?></p>

        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
        <!-- Sharing buttons -->
        <hr class="uk-article-divider">
        <div> Share on:
            <a class="uk-button btn-primary uk-button-large uk-border-rounded" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fblog.jgbnd.com.dev%2Fpost%2Fnon-ipsum-est-maiores-molestiae-occaecati-rerum&amp;t=Non ipsum est maiores molestiae occaecati rerum" target="blank">
                <i class="uk-icon-facebook"></i> Facebook
            </a>
            <a class="uk-button btn-info uk-border-rounded uk-button-large" href="https://twitter.com/share?url=http%3A%2F%2Fblog.jgbnd.com.dev%2Fpost%2Fnon-ipsum-est-maiores-molestiae-occaecati-rerum&amp;text=Non ipsum est maiores molestiae occaecati rerum&amp;via=jgbneatdesign" target="blank">
                <i class="uk-icon-twitter"></i> Twitter
            </a>
        </div>
        <br>
        <div class="box-meta">
            <p class="uk-article-meta">
                <i class="uk-icon-calendar"></i> <span>4 months ago</span> in
                <a href="category/articles"><i class="uk-icon-folder-open"></i> Articles</a>
            </p>
        </div>

        <footer class="entry-footer">
            <?php jgbnd_entry_footer(); ?>
        </footer><!-- .entry-footer -->
        <hr class="uk-article-divider">
    </article>
</div>