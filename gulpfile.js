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
    mix.sass('app.scss')
    .webpack('frontend/app.js', './public/js/frontend/frontend_app.js')
    
    // frontend
    .scripts([
        'frontend/theme/jquery.js',
        'frontend/theme/jquery-migrate.min.js',
        'frontend/theme/fontawesome.js',
        'frontend/theme/lightbox.js',
        'frontend/theme/jquery.themepunch.tools.min.js',
        'frontend/theme/jquery.themepunch.revolution.min.js',
        'frontend/theme/revolution.extension.video.min.js',
        'frontend/theme/revolution.extension.slideanims.min.js',
        'frontend/theme/revolution.extension.layeranimation.min.js',
        'frontend/theme/revolution.extension.navigation.min.js',
        'frontend/theme/revslider.min.js',        
        'frontend/theme/superfish.js',        
        'frontend/theme/core.utils.js',        
        'frontend/theme/core.init.js',        
        'frontend/theme/theme.shortcodes.js',        
        'frontend/theme/swiper.js',  
        'frontend/theme/isotope.min.js',          
        'frontend/theme/global.js',
        'frontend/theme/rev_slider_1_1.js',
    ], './public/js/frontend/theme.js')
    
    .styles([
        'frontend/*.css'
    ], './public/css/frontend/frontend.css')

    // backend
    .scripts([
        'backend/theme/jquery.min.js',
        'backend/theme/bootstrap.min.js',
        'backend/theme/jquery.dataTables.min.js',
        'backend/theme/dataTables.bootstrap.min.js',
        'backend/theme/icheck.min.js',
        'backend/theme/*.js',
        'backend/theme/custom.min.js'
    ], './public/js/backend/theme.js')

    .scripts([
        'backend/libs/*.js'
    ], './public/js/backend/libs.js')

    .styles([
        'backend/theme/*.css'
    ], './public/css/backend/theme.css')

    .styles([
        'backend/libs/*.css'
    ], './public/css/backend/libs.css')

    .styles([
        'backend/fonts/*.css'
    ], './public/css/backend/font-awesome/font-awesome.css')

});