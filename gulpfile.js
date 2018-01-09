var gulp = require('gulp');
var watch = require('gulp-watch');

gulp.task('default', function(){
	console.log("Horray - you created the gulp task");
});

gulp.task('styles', function(){
	console.log('hey hey');
});

gulp.task('watch', function(){

	watch('./temp/styles/**/*.css', function(){
		gulp.start('styles');
	});
});