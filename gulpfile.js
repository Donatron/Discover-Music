var gulp = require('gulp'),
  postcss = require('gulp-postcss');

// Plugins
var cssnext = require('postcss-cssnext'),
  pxtorem = require('postcss-pxtorem');

// Tasks

gulp.task("css", function(){
  var processors = [
    cssnext({browsers: ['last 3 versions', 'Firefox < 27']}),
    pxtorem({
      propWhiteList: [],
      mediaQuery: true
    })
  ];

  return gulp.src('./*.css')
    .pipe(postcss(processors))
    .pipe(gulp.dest('dest/'));
})

gulp.task('default', function() {
  gulp.watch('./*.css', ["css"]);
});
