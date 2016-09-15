var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .copy('bower_components/', 'public/bower_components')
        .copy('resources/img', 'public/img')
        .copy('resources/resume', 'public/resume')
        .browserify('main.js')
        .version([
            'css/app.css',
            'js/main.js'
        ]);
});
