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
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/navbar.js', 'public/js')
    .js('resources/js/admin.js', 'public/admin/js')

    .postCss('resources/css/navbar.css', 'public/css')
    .postCss('resources/css/custom.css', 'public/css')
    .postCss('resources/css/proyectos.css', 'public/css')
    .postCss('resources/css/contacto.css', 'public/css')
    .postCss('resources/css/vender.css', 'public/css')
    .postCss('resources/css/servicios.css', 'public/css')
    .postCss('resources/css/footer.css', 'public/css')

    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);

if (mix.inProduction()) {
    mix.version();
}
