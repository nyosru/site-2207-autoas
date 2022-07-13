const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copyDirectory("resources/assets", "public/assets");
mix.copyDirectory("node_modules/slick-carousel/slick", "public/slick");







mix.copyDirectory("vendor/didrive/base/design/design", "public/didrive");
mix.styles(
    [
        // "vendor/didrive/base/design/design/font/iconsmind/style.css",
        "public/didrive/font/iconsmind/style.css",
        // "/vendor/didrive/base/design/design/font/simple-line-icons/css/simple-line-icons.css",
        "public/didrive/font/simple-line-icons/css/simple-line-icons.css",
        // "/vendor/didrive/base/design/design/css/vendor/bootstrap.min.css",
        "public/didrive/css/vendor/bootstrap.min.css",
        // "/vendor/didrive/base/design/design/css/vendor/bootstrap-float-label.min.css",
        "public/didrive/css/vendor/bootstrap-float-label.min.css",
        // "/vendor/didrive/base/design/design/css/main.css",
        "public/didrive/css/main.css",
        // "/vendor/didrive/base/design/design/css/dore.light.blue.min.css",
        "public/didrive/css/dore.light.blue.min.css",
    ],
    "public/didrive/all.css"
);







/* for all page */
mix.js(
    [
        "resources/js/app.js",
        // "resources/assets/js/main.js",
        "resources/assets/js/main-menu.js",
        "resources/assets/js/numberformat.js",
    ],
    "public/js/all.js"
).styles(
    [
        "resources/css/bootstrap.css",
        "resources/css/app.css",
        "resources/css/owl.carousel.min.css",
        "resources/assets/css/style.css",
        "resources/assets/css/slick-theme.css",
        "resources/assets/css/ionicons.min.css",
        "resources/assets/css/font-awesome.css",
        // "resources/assets/vendor/css.css",
    ],
    "public/assets/css/all_css.css"
);

/* index page */
mix
    //
    .sass("resources/assets/scss/page-index.scss", "public/page-index.css")
    //
    .js(["resources/assets/js/index-carusel.js"], "public/js/all-index.js");
