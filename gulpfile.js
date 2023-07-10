var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix
        .sass('app.scss', './public/css/app.css' )
        .sass('pages/dashboard.scss', './public/css/pages/dashboard.css' )
        .sass('pages/home.scss', './public/css/pages/home.css' )
        .sass('pages/news.scss', './public/css/pages/news.css' )
});
