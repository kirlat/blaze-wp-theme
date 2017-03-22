const gulp = require('gulp'),
    argv = require('yargs').argv,
    newer = require('gulp-newer'),
    git = require('gulp-git'),
    concat = require('gulp-concat'),
    stripdebug = require('gulp-strip-debug'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    nodesass = require('node-sass'),
    postcss = require('gulp-postcss'),
    assets = require('postcss-assets'),
    mqpacker = require('css-mqpacker'),
    rename = require('gulp-rename'),
    cssnano = require('cssnano'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer'),
    imagemin = require('gulp-imagemin'),
    imageminJpegoptim = require('imagemin-jpegoptim'),
    sassdoc = require('sassdoc'),
    styledown = require('gulp-styledown'),
    clean = require('gulp-clean');

// Project configuration
var imagesSourcePath = 'images/source/**/*',
    imagesDestPath = 'images',
//imageminOptions = '{ optimizationLevel: 5 }',
// The imagemin option settings below satisfy Google Page Speed requirements to image compression
    imageminOptions = [
        imagemin.gifsicle({interlaced: true}),
        imageminJpegoptim({
            max: 85,
            progressive: true
        }),
        imagemin.optipng({optimizationLevel: 5}),
        imagemin.svgo({plugins: [{cleanupIDs: false, removeEmptyAttrs: false, removeViewBox: false}]})
    ],
    scssSourcePath = 'scss/**/*.scss',
    cssOutputPath = 'css',
    cssOutputFile = 'site.css',
    autoprefixerOptions = { browsers: ['last 2 versions', '> 1%', 'Firefox ESR'] },
    sassOptions = {
        outputStyle: 'expanded',
        imagePath: 'images/',
        precision: 3,
        errLogToConsole: true
    },
    postCssOpts = [
        assets({ loadPaths: ['images/'] }),
        autoprefixer(autoprefixerOptions),
        //mqpacker, // It might rearrange media rules and cause side effects in some situations. TODO: investigate solution
        cssnano
    ],
    postCssOptsDev = [
        assets({ loadPaths: ['images/'] }),
        autoprefixer(autoprefixerOptions)
    ],
    cssDependencies = [
        'components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.css',
        scssSourcePath
    ],
    jsSourcePath = 'js/source/**/*.js',
    jsDestPath = 'js',
    jsOutputFile = 'site.js',
    jsDependencies = [
        //'components/modernizr/modernizr.js', // We don't need feature detection currently
        'components/bootstrap-sass/assets/javascripts/bootstrap.js',
        'components/colorbox/jquery.colorbox.js',
        'components/smartmenus/dist/jquery.smartmenus.js',
        'components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.js',
        'components/webfontloader/webfontloader.js',
        'components/blaze-utils/js/utils.js',
        jsSourcePath
    ],
    jsDevDependencies = [
        //'components/modernizr/modernizr.js',
        'components/bootstrap-sass/assets/javascripts/bootstrap.js',
        'components/colorbox/jquery.colorbox.js',
        'components/smartmenus/dist/jquery.smartmenus.js',
        'components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.js',
        'components/webfontloader/webfontloader.js',
        'components/blaze-utils/js/utils.js'
    ],
    componentsRoot = 'components', // A directory inside theme's folder where components should be installed
    dependencies = [
        {
            name: 'blaze-wp-core',
            URI: 'https://github.com/kirlat/blaze-wp-core.git',
            revision: 'head',
            installPath: 'blaze-wp-core'
        },
        {
            name: 'blaze-wp-api',
            URI: 'https://github.com/kirlat/blaze-wp-api.git',
            revision: 'head',
            installPath: 'blaze-wp-api'
        },
        {
            name: 'blaze-components',
            URI: 'https://github.com/kirlat/blaze-components.git',
            revision: 'head',
            installPath: 'blaze-components'
        },
        {
            name: 'blaze-utils',
            URI: 'https://github.com/kirlat/blaze-utils.git',
            revision: 'head',
            installPath: 'blaze-utils'
        },
        {
            name: 'bootstrap-sass',
            URI: 'https://github.com/twbs/bootstrap-sass.git',
            revision: 'tag',
            tag: 'v3.3.7',
            installPath: 'bootstrap-sass'
        },
        {
            name: 'modernizr',
            URI: 'https://github.com/Modernizr/Modernizr.git',
            revision: 'tag',
            tag: 'v2.8.3',
            installPath: 'modernizr'
        },
        {
            name: 'colorbox',
            URI: 'https://github.com/jackmoore/colorbox.git',
            revision: 'tag',
            tag: '1.6.4',
            installPath: 'colorbox'
        },
        {
            name: 'es6-promise',
            URI: 'https://github.com/stefanpenner/es6-promise.git',
            revision: 'tag',
            tag: 'v4.0.5',
            installPath: 'es6-promise'
        },
        {
            name: 'font-awesome',
            URI: 'https://github.com/FortAwesome/Font-Awesome.git',
            revision: 'tag',
            tag: 'v4.7.0',
            installPath: 'font-awesome'
        },
        {
            name: 'handlebars',
            URI: 'https://github.com/wycats/handlebars.js.git',
            revision: 'tag',
            tag: 'v4.0.6',
            installPath: 'handlebars'
        },
        {
            name: 'mustache-php',
            URI: 'https://github.com/bobthecow/mustache.php.git',
            revision: 'tag',
            tag: 'v2.11.1',
            installPath: 'mustache-php'
        },
        {
            name: 'smartmenus',
            URI: 'https://github.com/vadikom/smartmenus.git',
            revision: 'tag',
            tag: '1.0.1',
            installPath: 'smartmenus'
        },
        {
            name: 'webfontloader',
            URI: 'https://github.com/typekit/webfontloader.git',
            revision: 'tag',
            tag: 'v1.6.27',
            installPath: 'webfontloader'
        },
        {
            name: 'fontfaceobserver',
            URI: 'https://github.com/bramstein/fontfaceobserver.git',
            revision: 'tag',
            tag: 'v2.0.8',
            installPath: 'fontfaceobserver'
        }
    ];

var errorHandler = function (err) {
    if (err) throw err;
};

// Install component dependencies
gulp.task('components', function() {
    gulp.src(componentsRoot, {read: false}).pipe(clean());

    dependencies.forEach( function (item) {
        var args;
        if (item.revision.toLowerCase() == 'head') {
            args = '-- ./' + componentsRoot + '/' + item.installPath;
        }
        else if (item.revision.toLowerCase() == 'tag') {
            args = '--branch ' + item.tag + ' ./' + componentsRoot + '/' + item.installPath
        }
        else {
            args = '-- ./' + componentsRoot + '/' + item.installPath;
        }
        git.clone(item.URI, {args: args}, errorHandler);
    });
});

// SASSDoc options
var sassdocOptions = {
    dest: 'docs/sass'
};

gulp.task('info', function(){
    console.log(nodesass.info)
});

// Optimize images from 'images' directory
gulp.task('images', function() {
    return gulp.src(imagesSourcePath + '.+(png|jpg|gif|svg)')
        .pipe(newer(imagesDestPath))
        .pipe(imagemin(imageminOptions, {}, { verbose: true }))
        .pipe(gulp.dest(imagesDestPath));
});

// CSS processing (production version)
gulp.task('css', ['images'], function() {
    return gulp.src(cssDependencies)
        .pipe(sass(sassOptions))
        .pipe(postcss(postCssOpts))
        .pipe(concat(cssOutputFile))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(cssOutputPath));

});

// CSS processing (development version)
gulp.task('css-dev', ['images'], function() {
    return gulp.src(cssDependencies)
        .pipe(sourcemaps.init())
        .pipe(sass(sassOptions))
        .pipe(postcss(postCssOptsDev))
        .pipe(concat(cssOutputFile))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(cssOutputPath));

});

gulp.task('sass-doc', function () {
    return gulp.src('scss/**/*.scss')
        .pipe(sassdoc(sassdocOptions));
});

// Bundle and optimize JavaScript (production version)
gulp.task('js', function() {
    return gulp.src(jsDependencies)
        .pipe(concat(jsOutputFile))
        .pipe(rename({suffix: '.min'}))
        .pipe(stripdebug())
        .pipe(uglify())
        .pipe(gulp.dest(jsDestPath));
});

// Bundle and optimize JavaScript (development version)
gulp.task('js-dev', function() {
    return gulp.src(jsDevDependencies)
        .pipe(concat(jsOutputFile))
        .pipe(gulp.dest(jsDestPath));
});

// Generate StyleDown docs
gulp.task('styledown', function(){
    return gulp.src('styleguide/styleguide.md')
        .pipe(styledown({
            config: 'styleguide/config.md',
            filename: 'styleguide.html'
        })).pipe(gulp.dest('styleguide/'));
});

// Build all assets
gulp.task('build', ['images', 'css', 'css-dev', 'js', 'js-dev']);

// Watch (production version)
gulp.task('watch', function() {
    gulp.watch(imagesSourcePath, ['images']);
    gulp.watch(scssSourcePath, ['css']);
    gulp.watch(jsSourcePath, ['js']);
});

// Watch (development version)
gulp.task('watch-dev', function() {
    gulp.watch(imagesSourcePath, ['images']);
    gulp.watch(scssSourcePath, ['css-dev']);
    gulp.watch(jsSourcePath, ['js-dev']);
});