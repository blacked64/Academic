const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
	.scripts([
		'resources/sb-admin/jquery/jquery.min.js',
		'resources/sb-admin/bootstrap/js/bootstrap.bundle.min.js',
		'resources/sb-admin/jquery-easing/jquery.easing.min.js',
		'resources/sb-admin/chart.js/Chart.min.js',
		'resources/sb-admin/datatables/jquery.dataTables.js',
		'resources/sb-admin/datatables/dataTables.bootstrap4.js',
		'resources/sb-admin/sb-admin.min.js',
		'resources/sb-admin/demo/datatables-demo.js',
		'resources/sb-admin/demo/chart-area-demo.js',
		'node_modules/bootstrap-select/dist/js/bootstrap-select.min.js',
		], 'public/js/all.js')
	.styles([
		'node_modules/bootstrap/dist/css/bootstrap.min.css',
		'resources/sb-admin/fontawesome-free/css/all.min.css',
		'resources/sb-admin/datatables/dataTables.bootstrap4.css',
		'resources/sb-admin/sb-admin.css',
		'node_modules/bootstrap-select/dist/css/bootstrap-select.min.css',
		], 'public/css/all.css')
   .sass('resources/sass/app.scss', 'public/css');
