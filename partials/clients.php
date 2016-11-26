<section id="clients" class="uk-block uk-block-primary uk-contrast">
  	<div class="uk-container uk-container-center">

     	<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1" >
     			<h2 class="uk-text-center">Some Fantastic Clients We've Worked With</h2>
			</div>

			@foreach($clients as $client)
            <div class="uk-width-medium-1-5 uk-text-center">
                <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                    <figure class="uk-overlay">
                        <img class="uk-border-circle" width="200" height="200" src="img/clients/{{ $client['image'] }}" alt="">
                        @if (! empty($client['website']))
                        <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            <div>
                                <a target="blank" href="{{ $client['website'] }}"
                                	class="uk-icon-button uk-icon-globe"></a>
                            </div>
                        </figcaption>
                    	@endif
                    </figure>
                </div>
                <h3 class="uk-margin-bottom-remove">{{ $client['name'] }}</h3>
            </div>
            @endforeach
     	</div>

		<hr class="uk-article-divider" id="testimonials"/>

		<div class="uk-width-medium-1-2 uk-container-center uk-text-center">
			<h3>What Our Happy Clients Say About Us</h3>
	     	<div data-uk-slideshow="{
	     		autoplay: true,
				animation: 'fade',
				autoplayInterval: 4000}" class="uk-text-left">
	            <ul class="uk-slideshow">
	            	<?php foreach($testimonials as $testimonial): ?>
	                <li>
	                    <div class="uk-panel uk-panel-box uk-panel-box-primary uk-border-rounded">
	                        <div class="uk-grid">
	                            <div class="uk-width-1-3">
	                                <img src="img/clients/<?= $testimonial['image'] ?>" width="200" height="200"
	                                	alt="<?= $testimonial['name'] ?>" class="uk-border-rounded">
	                            </div>
	                            <div class="uk-width-2-3">
	                            	<blockquote>
	                                	<p><?= $testimonial['text'] ?> </p>
	                                	<small>
	                                		<?= $testimonial['name'] ?>,
	                                		<?= $testimonial['role'] ?>
	                                	</small>
	                            	</blockquote>
	                            </div>
	                        </div>
	                    </div>
	                </li>
	            	<?php endforeach ?>
	            </ul>
		    </div>
		</div>

    </div>
</section>