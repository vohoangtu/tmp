<?phpsession_start();const LIBRARIES = './libraries/';const SOURCES = './sources/';const LAYOUT = 'layout/';const THUMBS = 'thumbs';const WATERMARK = 'watermark';use Illuminate\Container\Container;use NN\AddonsOnline;use NN\AltoRouter;use NN\AntiSQLInjection;use NN\BreadCrumbs;use NN\Cache;use NN\Cart;use NN\CssMinify;use NN\Email;use NN\Flash;use NN\Functions;use NN\JsMinify;use NN\MobileDetect;use NN\PDODb;use NN\Scss;use NN\Seo;use NN\Statistic;require_once LIBRARIES . "config.php";require_once LIBRARIES . "config-type.php";require_once LIBRARIES . "vendor/autoload.php";/** * @var $config */$app = Container::getInstance();$app['files']  = new Illuminate\Filesystem\Filesystem();$app['config'] = new \Illuminate\Config\Repository($config);$app['locale'] = 'vi';(new \Illuminate\Cache\CacheServiceProvider($app))->register();$iCache =  $app->make("cache");$storage = new \NN\Storage($iCache);$app['storage'] =  $storage;$injection = new AntiSQLInjection();$d = new PDODb($app['config']['database']);$flash = new Flash();$seo = new Seo($d);$emailer = new Email($d);$router = new AltoRouter();$cache = new Cache($d);$func = new Functions($d, $cache);$breadcr = new BreadCrumbs($d);$statistic = new Statistic($d, $cache);$cart = new Cart($d);$detect = new MobileDetect();$addons = new AddonsOnline();$css = new CssMinify($app['config']['website.debug-css'], $func);$js = new JsMinify($app['config']['website.debug-js'], $func);$scss = new Scss($app['config']['website.scss']);require_once LIBRARIES . "router.php";//if($com == 'index' && file_exists(__DIR__ .  "/storage/caches/".$_SERVER["REQUEST_URI"].".html")){//    echo file_get_contents("storage/caches/$com.html");exit();//}$storage->clear();include TEMPLATE . "index.php";