// webpack.mix.js
let mix = require('laravel-mix');
let minifier = require('minifier');

mix.sass('assets/scss/style.scss', 'style.css');
mix.sass('assets/scss/hamburgers.scss', 'hamburgers.css');

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
})

mix.then(() => {
    minifier.minify('style.css'),
    minifier.minify('hamburgers.css')
});