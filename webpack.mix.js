const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .styles([
        'resources/views/assets/css/bootstrap.css'
    ], 'public/lardcrud/asset/css/styled.css')
    .scripts([
        'resources/views/assets/js/bootstrap.js'
    ], 'public/lardcrud/asset/js/scriipt.js')
;
