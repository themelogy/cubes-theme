var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;
elixir.config.publicPath = 'assets';

var Task = elixir.Task;

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {
    mix.copy('resources/assets', 'assets');
    mix.stylistPublish();
});