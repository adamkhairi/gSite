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

mix
.js('resources/js/app.js', 'public/js')
mix.js('resources/js/main.js', 'public/js')
mix.js('resources/js/navbar.js', 'public/js')
mix.js('resources/js/sideBar.js', 'public/js')
.postCss('resources/css/main.css', 'public/css')
.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('autoprefixer'),
    // require('@tailwindcss/custom-forms'),
]);

if (mix.inProduction()) {
    mix
    .version();
}
