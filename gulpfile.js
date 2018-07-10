var gulp = require("gulp"),
    watch = require("gulp-watch"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssvars = require("postcss-simple-vars"),
    nested = require("postcss-nested"),
    cssImport = require("postcss-import"),
    cssMixins = require("postcss-mixins"),
    sugarss = require("sugarss"),
    sass = require("gulp-sass"),
    image = require("gulp-image"),
    imagemin = require("gulp-imagemin"),
    jimp = require("gulp-jimp-resize"),
    gulpAutoprefixer = require("gulp-autoprefixer");

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
        .pipe(gulpAutoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('image', function () {
    return gulp.src('./src/img/*')
        .pipe(jimp({
            sizes: [
                {"suffix": "min", "width": 1920}
            ]
        }))
        .pipe(image())
        .pipe(gulp.dest('./public/img'));
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
