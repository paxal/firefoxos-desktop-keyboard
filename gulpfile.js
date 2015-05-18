var gulp = require('gulp');
var changed = require('gulp-changed');
var rename = require('gulp-rename');
var run = require('gulp-run');
var del = require('del');
var concat = require('gulp-concat');

var SRC = 'src/app/*';
var DEST = 'build';

gulp.task('app', function() {
    return gulp
        .src(SRC)
        .pipe(changed(DEST))
        .pipe(gulp.dest(DEST));
});

gulp.task('js', function () {
    return gulp
        .src('src/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest(DEST + '/js'));
});

gulp.task('css', function () {
    return gulp
        .src('src/styles/*.css')
        .pipe(gulp.dest(DEST + '/styles'));
});

gulp.task('twig', function () {
    var cmd = new run.Command('tools/twig.php render');
    cmd.exec();
});

gulp.task('watch', function () {
    gulp.watch('src/html/**', [ 'twig' ]);
    gulp.watch('src/js/**', [ 'js' ]);
    gulp.watch('src/styles/**', [ 'css' ]);
    gulp.watch('src/app/**', [ 'app' ]);
});

gulp.task('clean', function (cb) {
    del([ DEST ], cb);
});

gulp.task('default', [ 'js', 'css', 'app' , 'twig' ]);

