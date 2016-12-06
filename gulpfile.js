const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    //mix.sass('app.scss')
    //.webpack('app.js')


    mix.scripts([
        'backend/theme/jquery.min.js',
        'backend/theme/bootstrap.min.js',
        'backend/theme/jquery.dataTables.min.js',
        'backend/theme/dataTables.bootstrap.min.js',
        'backend/theme/icheck.min.js',
        'backend/theme/*.js',
        'backend/theme/custom.min.js'
    ], './public/js/backend/theme.js')

    mix.scripts([
        'backend/libs/*.js'
    ], './public/js/backend/libs.js')

    mix.styles([
        'backend/theme/*.css'
    ], './public/css/backend/theme.css')

    mix.styles([
        'backend/libs/*.css'
    ], './public/css/backend/libs.css')

    mix.styles([
        'backend/fonts/*.css'
    ], './public/css/backend/font-awesome/font-awesome.css')

});
