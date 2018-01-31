var gulp = require('gulp');
gulp.task('default', function () {
    console.log('Hello Gulp!')
});


elixir.config.sourcemaps = false;

elixir((mix) => {
    mix.sass('app.sass','public/css/')
       .webpack('app.js')
       .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap')
       .browserSync({
        proxy: '127.0.0.1'
    });
});
