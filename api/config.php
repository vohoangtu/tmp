<?phpsession_start();define('LIBRARIES', '../libraries/');define('THUMBS', 'thumbs');define('WATERMARK', 'watermark');if (empty($_SESSION['lang'])) $_SESSION['lang'] = 'vi';$lang = $_SESSION['lang'];require_once LIBRARIES . "config.php";require_once LIBRARIES . "vendor/autoload.php";use Illuminate\Container\Container;use NN\AddonsOnline;use NN\AltoRouter;use NN\AntiSQLInjection;use NN\BreadCrumbs;use NN\Cache;use NN\Cart;use NN\CssMinify;use NN\Email;use NN\Flash;use NN\Functions;use NN\JsMinify;use NN\MobileDetect;use NN\PDODb;use NN\Seo;use NN\Statistic;$app = Container::getInstance();$app['files']  = new Illuminate\Filesystem\Filesystem();$app['config'] = new \Illuminate\Config\Repository($config);$app['locale'] = 'vi';(new \Illuminate\Cache\CacheServiceProvider($app))->register();$iCache =  $app->make("cache");$storage = new \NN\Storage($iCache);$app['storage'] =  $storage;$d = new PDODb($config['database']);$cache = new Cache($d);$func = new Functions($d, $cache);$cart = new Cart($d);require_once LIBRARIES . "lang/$lang.php";$sluglang = 'slugvi';/* Setting */$sqlCache = "select * from #_setting";$setting = $cache->get($sqlCache, null, 'fetch', 7200);$optsetting = (!empty($setting['options'])) ? json_decode($setting['options'], true) : null;