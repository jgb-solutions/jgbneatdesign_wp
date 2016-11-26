<section id="work" class="uk-block uk-contrast uk-block-warning">
  	<div class="uk-container uk-container-center">
		<div class="uk-grid" data-uk-grid-margin>
    		<div class="uk-width-1-1" >
     			<h2 class="uk-text-center">Stuff That Got Us Busy Recently</h2>
			</div>
			<?php $i = 0;
            foreach($recentWorks as $work): ?>
            <div class="uk-width-medium-1-3">
                <div class="uk-thumbnail uk-overlay-hover" >
                    <figure class="uk-overlay">
                        <img width="500" height="500" src="img/work/{{$work['image']}}" alt="">
                        <figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></figcaption>
                        <a class="uk-position-cover" href="#work-{{$i}}" data-uk-modal></a>
                    </figure>
                </div>
				<div id="work-{{$i}}" class="uk-modal">
                    <div class="uk-modal-dialog uk-modal-dialog-blank">
                        <button class="uk-modal-close uk-close" type="button"></button>
                        <div class="uk-grid uk-flex-middle" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2 uk-height-viewport uk-cover-background"
                            	style="background-image: url(img/work/{{$work['image']}});">
                            </div>
                        	<div class="uk-width-medium-1-2">
                            	<div class="uk-block">
                        			<h3 class="uk-text-primary uk-text-center">{{ $work['name']}}</h3>
                                	<p class="uk-text-primary">{{$work['description']}}</p>
                            	</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach; ?>
		</div>
	</div>
</section>