let mix = require('laravel-mix');
require('mix-tailwindcss');

mix.sass('Src/scss/app.scss', 'public/css/app.css').tailwind();
mix.js('Src/js/app.js', 'public/js/app.js');