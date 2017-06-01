const { mix } = require('laravel-mix');

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

mix.js([
    'resources/assets/js/app.js',
    'node_modules/tone/build/Tone.js'
        ], 'public/js')
    .extract(['vue', 'jquery', 'bootstrap-sass', 'tone'])
    .scripts([
        'resources/assets/js/pace.min.js',
        'resources/assets/js/pixeladmin.min.js'
    ], 'public/js/pixeladmin.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/custom.scss', 'public/css')
    .autoload({
        jquery: ['$', 'jQuery', 'window.jQuery'],
        tone: ['Tone', 'Tone']
    });