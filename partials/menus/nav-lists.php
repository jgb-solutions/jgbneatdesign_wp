<?php if (is_front_page()): ?>

	<li>
	    <a href="#about"><i class="uk-icon-info-circle"></i> About</a>
	</li>
	<li>
	    <a href="#services"><i class="uk-icon-wrench"></i> Services</a>
	</li>
	<li>
    	<a href="#works"><i class="uk-icon-suitcase"></i> Works</a>
	</li>
	<li>
	    <a href="#clients"><i class="uk-icon-users"></i> Clients</a>
	</li>
	<li>
	    <a href="#posts"><i  class="uk-icon-pencil"></i> Blog</a>
	</li>

<?php else: ?>

	<li>
	    <a href="/#about"><i class="uk-icon-info-circle"></i> About</a>
	</li>
	<li>
	    <a href="/#services"><i class="uk-icon-wrench"></i> Services</a>
	</li>
	<li>
    	<a href="/works"><i class="uk-icon-suitcase"></i> Works</a>
	</li>
	<li>
    	<a href="/clients"><i class="uk-icon-users"></i> Clients</a>
	</li>
	<li>
	    <a href="/posts"><i  class="uk-icon-pencil"></i> Blog</a>
	</li>
<?php endif; ?>

<li>
    <a href="#contact"><i class="uk-icon-envelope"></i> Contact</a>
</li>