var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');
require('laravel-elixir-livereload');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.stylus('main.styl')
       .styles([
				'bootstrap.min.css',
				'icons-font.css',
				'quicksand.css',
				'slick.css',
				'main.css'
				], 'public/css/all.css','public/css')
       .scripts([
		       	'jquery.min.js',
		       	'bootstrap.min.js',
		       	'slick.min.js',
		       	'custom.js'
		       	], '/public/js/all.js', '/public/js')
		.version(['public/css/all.css']);
    
    mix.livereload(['public/**/*', 'resources/views/**/*']);
});