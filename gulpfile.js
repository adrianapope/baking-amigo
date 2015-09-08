var elixir = require('laravel-elixir');

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

    mix.sass([
		'bootstrap.scss',
		'libs/select2.min.css',
        'libs/sweetalert.css'
	], 'public/css/app.css')
    .scripts([
        'libs/bootstrap.js',
        'libs/jquery.js',
        'libs/select2.min.js',
        'libs/sweetalert-dev.js'
    ], 'public/js/app.js')
    .version([
        'public/css/app.css',
        'public/js/app.js'
    ]);

});
