"use strict";

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('autoprefixer'),
    newer = require('gulp-newer'),
    sourcemaps = require('gulp-sourcemaps'),
    imagemin = require('gulp-imagemin'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch'),
    imgSrc = 'assets/images/originals/*',
    imgDest = 'assets/images/',
    postcss = require('gulp-postcss');



gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost/arkus/"
    });
});

gulp.task('sass', function () {
  var processors = [
        autoprefixer({browsers: ['last 2 version']}),
    ];
  return gulp.src('assets/sass/**/*.scss')
    .pipe(sourcemaps.init())
    
    .pipe(sass({ outputStyle:'compressed'}).on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./'));
});

// Font Awesome
  gulp.src([
      './node_modules/@fortawesome/**/*',
    ])
    .pipe(gulp.dest('./assets/css'))


gulp.task('watch', function() {

    // Watch .scss files
    gulp.watch('assets/sass/*.scss', ['sass']).on("change", browserSync.reload);
    gulp.watch('assets/sass/**/*.scss', ['sass']).on("change", browserSync.reload);
    // Watch js directory
    gulp.watch('assets/js/**/*.js', ['js']).on("change", browserSync.reload);
    // Watch original images directory
    gulp.watch(imgSrc, ['images']).on("change", browserSync.reload);
});

gulp.task('images', function() {
    return gulp.src(imgSrc, {base: 'assets/images/originals'})
      .pipe(newer(imgDest))
      .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
      .pipe(gulp.dest(imgDest));
});


var jsInput = { js: 'assets/js/dev/**/*.js'}
var jsOutput = 'assets/js/dist/';

gulp.task('js', function(){
  return gulp.src([
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/popper.js/dist/umd/popper.min.js',
    'node_modules/jquery.easing/jquery.easing.min.js',
    'assets/js/dev/**/*.js'
  ]).pipe(concat('app.min.js'))
    .pipe(gulp.dest('./assets/js/dist/'))
});


gulp.task('default',['sass', 'browser-sync','watch','images', 'js']);