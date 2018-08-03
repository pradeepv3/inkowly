var gulp = require('gulp');

//var jslint = require("gulp-jshint");
var changed = require('gulp-changed');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");

var SassSRC = './assets/sass/*.scss';
var SassDest = './css/'

// gulp.task("default", function(){
//     gulp.src('./js/script.js')
//     .pipe(jslint())
//     .pipe(jslint.reporter('default'))
// });

gulp.task('changed', function(){
	console.log("changed");
	return gulp.src(SassSRC)
	.pipe(changed(SassDest))
	.pipe(gulp.dest(SassDest));
});


gulp.task('sass',function(){
	gulp.src(SassSRC)
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest(SassDest))
	.pipe(cleanCSS({compatibility: 'ie8'}))
	  .pipe(rename(function(path){
		path.basename += ".min";
	  }))
	  .pipe(gulp.dest(SassDest));
});

// gulp.task('minify-css', ['sass'], () => {
// 	return gulp.src('./css/css/style.css')
// 	  .pipe(cleanCSS({compatibility: 'ie8'}))
// 	  .pipe(rename(function(path){
// 		path.basename += ".min";
// 	  }))
// 	  .pipe(gulp.dest('./css/css/min'));
//   });

gulp.task('watch',function(){
	gulp.watch(SassSRC,['sass']);
});

gulp.task('default',['sass','watch']);
