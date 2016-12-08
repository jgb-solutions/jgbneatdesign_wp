<?php $postURL = urlencode(get_permalink()); $postTitle = get_the_title(); ?>

<div class="uk-grid">
    <div class="uk-width-small-1-2 mbottom1">
        <p>
            <a class="uk-button btn-primary uk-button-large uk-border-rounded btn uk-width-1-1"
                href="https://www.facebook.com/sharer.php?u=<?= $postURL ?>&amp;t=<?= $postTitle ?>" target="blank">
                <i class="uk-icon-facebook"></i> Facebook
            </a>
        </p>
    </div>
    <div class="uk-width-small-1-2">
        <p>
            <a class="uk-button btn-info uk-border-rounded uk-button-large btn uk-width-1-1"
                href="https://twitter.com/share?url=<?= $postURL ?>&amp;text=<?= $postTitle ?>&amp;via=jgbneatdesign" target="blank">
                <i class="uk-icon-twitter"></i> Twitter
            </a>
        </p>
    </div>
</div>