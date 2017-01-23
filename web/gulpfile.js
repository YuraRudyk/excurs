// grab our packages
var gulp   = require('gulp');
var sass   = require('gulp-sass');
var rename = require('gulp-rename');

var publicFolder = 'typo3conf/ext/sem_sitepackage/Resources/Public';
var rteFolder    = 'typo3conf/ext/sem_content/Resources/Public';

// default task
gulp.task('default', ['sass', 'sass:watch']);

// Global styles
gulp.task('sass', function () {
  return gulp.src(publicFolder + '/Sass/import.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(rename('layout.css'))
    .pipe(gulp.dest(publicFolder + '/Styles'));
});

// Watcher
gulp.task('sass:watch', function () {
  gulp.watch(publicFolder + '/Sass/**/*.scss', ['sass']);
});

// RTE styles for sem_content
gulp.task('rte-content', function () {
  return gulp.src(rteFolder + '/Sass/rte.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(rename('rte.css'))
    .pipe(gulp.dest(rteFolder + '/Styles'));
});

/**
 * Gulp task which compiles styles of RTE for your sem_<project_name>_content
 */
// var rteFolder = 'typo3conf/ext/sem_<project_name>_content/Resources/Public';
//
// gulp.task('rte', function () {
//   return gulp.src(rteFolder + '/Sass/rte.scss')
//     .pipe(sass().on('error', sass.logError))
//     .pipe(rename('rte.css'))
//     .pipe(gulp.dest(rteFolder + '/Styles'));
// });
