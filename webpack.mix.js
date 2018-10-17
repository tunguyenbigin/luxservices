let mix = require('laravel-mix');

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
mix.webpackConfig({
    resolve: {
        alias: {
            '@themes' : path.resolve(__dirname, 'Modules/Themes/Resources/assets')
        }
    }
})
mix.js('Modules/Users/Resources/assets/js/app.js', 'public/storage/js/users/app.js')
	.js('Modules/Users/Resources/assets/js/profile_details.js', 'public/storage/js/users/profile_details.js')
    //inc
    .js('Modules/Themes/Resources/assets/inc/form.js', 'public/storage/js/themes/inc/form.js');
    //end inc
    //.sass('resources/assets/sass/app.scss', 'public/css');
