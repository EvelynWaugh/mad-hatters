const sass = require("gulp-sass");
const concat = require("gulp-concat");
const concatCss = require("gulp-concat-css");
const {src, dest, watch, series, parallel} = require("gulp");
// const prefixer = require("gulp-autoprefixer");
const uglify = require("gulp-uglify-es").default;
const postcss = require("gulp-postcss");
const tailwindcss = require("tailwindcss");
const webpack = require("webpack-stream");
const sync = require("browser-sync").create();
const autoprefixer = require("autoprefixer");
const dependCss = require("./postcss.config.js");
// sass.compiler = require("node-sass");

function styles() {
  return (
    src("./sass/main.css")
      .pipe(postcss(dependCss.plugins))
      .pipe(sync.stream())
      .pipe(dest("./assets/dist/css"))
  );
}

function scripts() {
  return src("./assets/src/js/**/*.js")
    .pipe(
      webpack({
        module: {
          rules: [
            {
              test: /\.m?js$/,
              use: {
                loader: "babel-loader",
                options: {
                  presets: ["@babel/preset-env"],
                },
              },
            },
          ],
        },
        output: {
          filename: "bundle.js",
        },
        externals: {
          jquery: "jQuery",
        },
      })
    )

    .pipe(uglify())
    .pipe(concat("bundle.js"))
    .pipe(dest("./assets/dist/js"));
}

function syncInit() {
  sync.init({
    proxy: "http://kharkiv.local",
  });
}
function reload(cb) {
  sync.reload();
  cb();
}
function watchProcess() {
  watch("./sass/**/*.css", styles);

  watch("./assets/src/js/**/*.js", series(scripts, reload));
  watch("./**/*.html", reload);
}

function watchStyle() {
  watch("./sass/**/*.css", styles);
}

exports.scriptTest = scripts;
exports.bundle = series(parallel(syncInit, watchProcess), scripts);
exports.default = parallel(syncInit, watchStyle);
exports.style = watchStyle;
