var gulp = require('gulp');
var watch = require('gulp-watch');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssvars = require('postcss-simple-vars');
var nested = require('postcss-nested');
var cssImport = require('postcss-import');
var mixins = require('postcss-mixins');


gulp.task('default', function(){
	console.log("Horray - you created the gulp task");
});

gulp.task('styles', function(){
	return gulp.src('./temp/styles/styles.css')
	.pipe(postcss([cssImport, mixins, cssvars, nested, autoprefixer]))
	.on('error', function(errorInfo) {
      console.log(errorInfo.toString());
      this.emit('end');
    })
	.pipe(gulp.dest('./css'));
});

gulp.task('watch', function(){

	watch('./temp/styles/**/*.css', function(){
		gulp.start('styles');
	});
});

//import font awesome
gulp.task('fonts', function() {
  return gulp.src('node_modules/font-awesome/fonts/*')
    .pipe(gulp.dest('./fonts'))
})

