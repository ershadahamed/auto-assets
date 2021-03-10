# auto-load
## _Auto load CSS, JS, Image and Others Once Define the Actual Resource Files_

Framework and UI used

- [CodeIgniter] - Codeigniter 3.1.11
- [AdminLTE] - awesome admin dashboard UI

You can apply differnet Admin  UI of your choose with the same approach, AdminLTE simply just my favarote.

## Installation
1. Create an assets folder inside root folder of CI, if doesn't exist.
2. Download the AdminLTE templates.
3. Copy all the folder inside the dist/* folder into assets folder.
4. Copy the plugin folder into assets folder.
5. Follow the sample code on dashboard view and controller, and the partials folder in views.
6. Take note on the views/partials/header.php, we can pass any class name during the view called from controller to body tag,
7. Plugin folder used to keep all your downloaded libs for the UI.
8. Folder CSS, JS, IMAGES used to keep your own assets files.

## Usage
Install [Laragon] or [XAMPP] or any PHP web server version more than 5.6. Define a host http://auto-assets.test and than can access the site once the web server up. To see the sample working site.

## Dashboard view at views/dashboard.php
```PHP
<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('TOP_ASSET', topAsset([
	addPlugin("CSS", [
		'fontawesome-free/css/all.min.css',
	]),
	addPlugin("CSS_URL", [
		'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'
	]),
	addPlugin("CSS", [
		'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
		'icheck-bootstrap/icheck-bootstrap.min.css',
		'jqvmap/jqvmap.min.css'
	]),
	addCss(['adminlte.min.css']),
	addPlugin("CSS", [
		'overlayScrollbars/css/OverlayScrollbars.min.css',
		'daterangepicker/daterangepicker.css',
		'summernote/summernote-bs4.css'
	]),
	addPlugin('CSS_URL', [
		'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700'
	])
]));
define('BTM_ASSET', btmAsset([
	addPlugin("JS", [
		'jquery/jquery.min.js',
		'jquery-ui/jquery-ui.min.js',
		'tooltip-conflict.js',
		'bootstrap/js/bootstrap.bundle.min.js',
		'chart.js/Chart.min.js',
		'sparklines/sparkline.js',
		'jqvmap/jquery.vmap.min.js',
		'jqvmap/maps/jquery.vmap.usa.js',
		'jquery-knob/jquery.knob.min.js',
		'moment/moment.min.js',
		'daterangepicker/daterangepicker.js',
		'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
		'summernote/summernote-bs4.min.js',
		'overlayScrollbars/js/jquery.overlayScrollbars.min.js'
	]),
	addJs([
		'adminlte.js',
		'pages/dashboard.js',
		'demo.js'
	])
]));
$this->load->view('partials/header');
?>

<!-- Put html content here -->

<!-- Below open script can be added if need to add after all the JS includes. -->
<?php
$script = <<<EOD
<script type="text/javascript">
	alert('ok');
</script>
EOD;
define('CUSTOM_JS', $script);
?>

<!-- Footer -->
<?php $this->load->view('partials/footer'); ?>
```

## Function Usage
All the resource files must be called in usage order, so that no overwrite happen in CSS or function conflict in JS. All the function return STRING.

```php
auto-assets_helper.php
$autoload['helper'] = array('url', 'auto-assets');
```
Make sure to copy the helper file into helper folder and call the following helper in autoload

```php
topAssets(array())
```
Used for combine all plugin and own resource file (CSS) render at top of the page in head section.
```php
btmAssets(array())
```
Used for combine all plugin and own resource file (JS) render at bottom of the page right before body closing tag.
```php
addPlugin($type, array())
```
Used for combine all plugin and own resource file (JS) render at bottom of the page right before body closing tag. $type is CSS, JS, CSS_URL and JS_URL. CSS_URL and JS_URL used to call external URL resources.
```php
addCss(array())
```
Collection of own CSS resource files.
```php
addJs(array())
```
Collection of own JS resource files.
```php
addImage($images)
```
Return full path of image

## License
MIT

**Free Software, Hell Yeah!**

   [CodeIgniter]: <https://codeigniter.com/>
   [AdminLTE]: <https://adminlte.io/>
   [Laragon]: <https://laragon.org/>
   [XAMPP]: <https://www.apachefriends.org/>