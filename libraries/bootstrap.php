<?php
session_start();
define('LIBRARIES', __DIR__ .'/');

/* Config */
require_once LIBRARIES . "config.php";
require_once LIBRARIES . "vendor/autoload.php";

use NN\AddonsOnline;
use NN\AltoRouter;
use NN\AntiSQLInjection;
use NN\BreadCrumbs;
use NN\Cache;
use NN\Cart;
use NN\CssMinify;
use NN\Email;
use NN\Flash;
use NN\Functions;
use NN\JsMinify;
use NN\MobileDetect;
use NN\PDODb;
use NN\Seo;
use NN\Statistic;

$injection = new AntiSQLInjection();
$d = new PDODb($config['database']);
$flash = new Flash();
$seo = new Seo($d);
$emailer = new Email($d);
$router = new AltoRouter();
$cache = new Cache($d);
$func = new Functions($d, $cache);
$breadcr = new BreadCrumbs($d);
$statistic = new Statistic($d, $cache);
$cart = new Cart($d);
$detect = new MobileDetect();
$addons = new AddonsOnline();
$css = new CssMinify($config['website']['debug-css'], $func);
$js = new JsMinify($config['website']['debug-js'], $func);

app()->bindIf("d", function() use($config){
    return new PDODb($config['database']);
});
