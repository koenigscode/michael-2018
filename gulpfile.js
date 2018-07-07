var gulp = require("gulp"),
    watch = require("gulp-watch"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssvars = require("postcss-simple-vars"),
    nested = require("postcss-nested"),
    cssImport = require("postcss-import"),
    cssMixins = require("postcss-mixins"),
    sugarss = require("sugarss"),
    sass = require("gulp-sass");

gulp.task("style", function () {
    return gulp
        .src("./src/style.css")
        .pipe(postcss([cssImport, cssMixins, cssvars, nested, autoprefixer]))
        .on("error", function (err) {
            console.log(err.toString());

            this.emit("end");
        })
        .pipe(gulp.dest("./public/css"));
});

gulp.task('sass', function () {
    return gulp.src('./src/style.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('./public/css'));
});

gulp.task("watch", function () {
    gulp.start("sass");

    watch("./src/**/*.scss", function () {
        gulp.start("sass");
    });

    watch("./src/**/*.css", function () {
        gulp.start("sass");
    });

});
