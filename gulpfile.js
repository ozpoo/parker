const gulp = require('gulp');
const uglify = require("gulp-uglify");
const sass = require('gulp-sass');
const minify = require("gulp-minify-css");
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const concat = require("gulp-concat");

var watchJS = true;
var watchSCSS = true;

gulp.task('js', function () {
	if(watchJS) {
		watchJS = false;

		var libStream = gulp.src([
				'assets/font/Font Awesome/svg-with-js/js/fontawesome-all.min.js',
				'assets/js/_lib/smoothstate/smoothstate.min.js',
				'assets/js/_lib/lettering/jquery.lettering.js',
				'assets/js/_lib/textillate/jquery.textillate.js',
				'assets/js/_lib/aos/aos.js',
				'assets/js/_lib/greensock-easing/minified/TweenMax.min.js',
				'assets/js/_lib/greensock-easing/minified/easing/CustomEase.min.js',
				'assets/js/_lib/lazysizes/lazysizes.min.js',
				'assets/js/src/script.js'
			])
			.pipe(concat('script.js'))
			.pipe(uglify())
			.pipe(gulp.dest('assets/js/build'));

		watchJS = true;
	}
});

gulp.task('scss', function () {
	if(watchSCSS) {
		watchSCSS = false;
	  gulp.src('assets/css/src/style.scss')
		.pipe(concat('style.css'))
		.pipe(sass())
	  .pipe(postcss([ autoprefixer() ]))
		.pipe(minify())
	  .pipe(gulp.dest('assets/css/build'));
		watchSCSS = true;
	}
});

gulp.task('watch', function () {
  gulp.watch(['assets/css/src/style.scss'], ['scss']);
	gulp.watch(['assets/js/src/script.js'], ['js']);
});
