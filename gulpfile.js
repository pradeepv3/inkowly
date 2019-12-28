const gulp = require('gulp');

const changed = require('gulp-changed');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");
const wait = require('gulp-wait');
const sourcemaps = require("gulp-sourcemaps");
const browserSync = require('browser-sync').create();
const reload = browserSync.reload;
const autoprefixer = require('gulp-autoprefixer');

const SassSRC = './assets/sass/*.scss';
const SassDest = './assets/css/';

const cssSrc = './assets/css/*.css';
const cssSrcDest = './css/';

const jsSRC = './assets/js/*.js';
const jsDest = './js/'

// function changed() {
//   return gulp.src(SassSRC)
//     .pipe(changed(SassDest))
//     .pipe(gulp.dest(SassDest));
// }

function compresser() {
    return gulp.src(jsSRC)
        .pipe(uglify())
        .pipe(rename(function (path) {
            path.basename += ".min";
        }))
        .pipe(gulp.dest(jsDest))
        .pipe(browserSync.stream());
}

function style() {
    return gulp.src(SassSRC)
        .pipe(wait(500))
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(SassDest))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(cssSrcDest))
        .pipe(browserSync.stream());
}

function cleancss() {
    return gulp.src(cssSrc)
        .pipe(cleanCSS({
            level: {
                1: {
                    specialComments: 0
                }
            }
        }))
        .pipe(rename(function (path) {
            path.basename += ".min";
        }))
        .pipe(gulp.dest(cssSrcDest))
        .pipe(browserSync.stream());
}

function browserRelaod() {
    browserSync.init({
        port: 3001,
        proxy: "http://localhost/inkowly/"
    });
    gulp.watch("./**/*.php").on('change', browserSync.reload);
}

function watch() {
    gulp.watch(SassSRC, style);
    gulp.watch(cssSrc, cleancss);
    gulp.watch(jsSRC, compresser);
}

//gulp.task('default', ['sass', 'watch', 'uglify']);

const build = gulp.parallel(style, cleancss, compresser, browserRelaod, watch);
gulp.task('default', build);