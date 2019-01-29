var elixir = require('laravel-elixir');

//let mix = require('laravel-mix');
elixir(function(mix) {
    mix.sass("app.scss");
    mix.browserSync({
        proxy: 'achil74.ru'
    });
});

