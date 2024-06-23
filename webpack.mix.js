const mix = require('laravel-mix');

mix.disableNotifications();

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .js('resources/js/bootstrap.js', 'public/js') // Mantén esta línea
    .copy('node_modules/admin-lte/dist/css', 'public/vendor/adminlte/dist/css')
    .copy('node_modules/admin-lte/dist/img', 'public/vendor/adminlte/dist/img')
    .copy('node_modules/admin-lte/dist/js', 'public/vendor/adminlte/dist/js')
    .copy('node_modules/pusher-js/dist/web/pusher.min.js', 'public/js')
    .copy('node_modules/pusher-js/dist/web/pusher.min.js.map', 'public/js');

 


