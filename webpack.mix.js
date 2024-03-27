const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
<<<<<<< HEAD
    .sass('resources/sass/main.scss', 'public/css');
=======
	.sass('resources/sass/main.scss','public/css');
>>>>>>> 7b3c5fa54281db79c1b2d8a7dd78e76c45237e27
