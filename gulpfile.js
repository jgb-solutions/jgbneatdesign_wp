var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'source/assets';
elixir.config.publicPath = 'assets';

elixir(function(mix) {
   	mix
   		// .copy('vendor/bower/jquery/dist/jquery.min.js', 'source/_assets/js/vendor/jquery.js')
		.less('app.less')

     	.combine([
     		'vendor/jquery.js',
         	'uikit/uikit.min.js',
         	'uikit/components/slideshow.min.js',
         	'uikit/components/sticky.min.js',
         	'uikit/components/slideshow-fx.min.js',
         	// 'app.js',
     	], 'assets/js/app.js', 'source/assets/js')

        .version(['css/app.css', 'js/app.js'])
});
