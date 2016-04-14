var elixir = require('laravel-elixir');

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
    // App Common
    mix.sass('app.scss');

    // Index
    mix.sass('modules/index.scss');

    // Package
    mix.sass('modules/package.scss');
    mix.sass('modules/package-list.scss');

    // Hub
    mix.sass('modules/hub.scss');

    // Profile
    mix.sass('modules/profile.scss');    

    // App Common Script
    mix.browserify('app.js')

    // Versioning
    mix.version([
    		'css/index.css',
    		'css/package-list.css',
    		'css/package.css',
            'css/hub.css',
            'css/profile.css',
    		'css/app.css',
    		'js/app.js']);

   // mix.scripts([ "app.js", "test.js" ]);

});
