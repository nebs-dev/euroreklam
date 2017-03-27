var gulp = require('gulp');
var postcss = require('gulp-postcss');

//PostCSS Plugins
var mixins = require('postcss-mixins');             // plugin for Mixins                https://github.com/postcss/postcss-mixins
var simplevars = require('postcss-simple-vars');    // plugin for SASS variables        https://github.com/postcss/postcss-simple-vars
var nested = require('postcss-nested');             // plugin for Nesting CSS           https://github.com/postcss/postcss-nested
var customMedia = require('postcss-custom-media');  // plugin for MediaQueriues         https://github.com/postcss/postcss-custom-media
var atImport = require('postcss-import');           // plugin for Import files          https://github.com/postcss/postcss-import
var csswring = require('csswring');                 // plugin for Minify CSS            https://github.com/hail2u/node-csswring
var cssnext = require('postcss-cssnext');           // plugin for CSS syntax            http://cssnext.io/
var autoprefixer = require('autoprefixer');         // plugin for autoprefix            https://github.com/postcss/autoprefixer
var bemLinter = require('postcss-bem-linter');      // plugin for BEM                   https://github.com/postcss/postcss-bem-linter
var stylelint = require("stylelint");            // plugin for avoid errors in CSS   https://github.com/stylelint/stylelint
var reporter = require("postcss-reporter");         // plugin for CSS error in Console  https://github.com/postcss/postcss-reporter
var clearfix = require('postcss-clearfix');

// Plugins for images
var imagemin = require('gulp-imagemin');            // plugin for image compressing     https://www.npmjs.com/package/gulp-imagemin
var pngquant = require('imagemin-pngquant');        // $ npm i -D imagemin-pngquant
var svgSprite = require('gulp-svg-sprite');         // plugin for SVG sprites           https://github.com/jkphl/gulp-svg-sprite

var rucksack = require('gulp-rucksack');            // plugin for multiple help         http://simplaio.github.io/rucksack/docs/#gulp

// Plugins for typo
var colorRgbaFallback = require("postcss-color-rgba-fallback"); // fallback RGBA to HEX https://github.com/postcss/postcss-color-rgba-fallback
var pxtorem = require('postcss-pxtorem');           // plugin for convert PX to REM     https://github.com/cuth/postcss-pxtorem

var verticalRhythm = require('postcss-vertical-rhythm');

// Defining processirs and dest
gulp.task('styles', function (){
    var processors = [
        atImport ({
            from: 'src/css/app.css'
        }),
        cssnext({warnForDuplicates: false}),
        mixins,
        simplevars,
        nested,
        customMedia,
        autoprefixer({ browsers: ['last 2 versions'] }),
        bemLinter(),
        reporter(),
        verticalRhythm,
        pxtorem({propWhiteList: ['width', 'height', 'padding', 'font', 'margin', 'font-size', 'line-height', 'letter-spacing']}),
        colorRgbaFallback,
        clearfix,
        csswring({removeAllComments: true}) // enable this for production
    ];

    return gulp.src('src/css/app.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('../../../../public/css/frontend'));
});

// Image compress
gulp.task('imagemin', function() {
    return gulp.src('src/images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [
                {removeViewBox: false},
                {cleanupIDs: false}
            ],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('../../../../public/css/frontend/images'));
});


// SVG Sprites
gulp.task('svgsprite', function() {
    // https://github.com/jkphl/gulp-svg-sprite
    var config = {
        mode: {
            css: {
                render: {
                    css: true
                }
            }
        }
    };
    return gulp.src('src/svg/*.svg')
        .pipe(svgSprite(config))
        .pipe(gulp.dest('web/css/svg'));
});

//Watch task
gulp.task('watch:styles', ['styles'],
    function () {
        gulp.watch('src/css/**/*.css', ['styles']);
    });