<?php
/*
| -------------------------------------------------------------------------------
| Author            : Galih Sophian
| Template Name     : G-Silvers V3
| -------------------------------------------------------------------------------
*/

$uri = isset($uri) ? $uri : '';
if (($pos = strrpos($uri, '/')) !== false) $url_str = substr($uri, $pos+1);

define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('APP_PATH', DOCUMENT_ROOT . '/app');
define('CLASS_PATH', APP_PATH . '/class');

require __DIR__.'/config/autoload.php';

if (config('timezone')) {
    date_default_timezone_set(config('timezone'));
} else {
    date_default_timezone_set('Asia/Jakarta');
}

if ($uri == '/' . options('url_tvdb') or $uri == '/' . options('url_tvdb') . '/') {
    header('location:'.site_url());
}

if (str_replace('/', '', $uri) == options('url_sport') or str_replace('/', '', $uri) == 'sports') 
{
	header('location:'.site_url().'/'.options('url_sport').'/sports/');
}
// This file allows us to emulate Apache's "mod_rewrite" functionality
$arrayfuk = array(config('search_url'),config('category_url'),options('url_page'),options('url_movie'),options('url_da'),options('url_en'),options('url_vi'),options('url_uk'),options('url_sv'),options('url_es'),options('url_sk'),options('url_sr'),options('url_ar'),options('url_ru'),options('url_ro'),options('url_pt'),options('url_pl'),options('url_no'),options('url_ko'),options('url_it'),options('url_ja'),options('url_hu'),options('url_el'),options('url_de'),options('url_ka'),options('url_fr'),options('url_fi'),options('url_nl'),options('url_th'),options('url_bg'),options('url_zh'),options('url_cs'),options('url_tvdb'),options('url_tv'),options('url_sport'),options('url_watch'),options('url_single'));

if(isset($_GET['s'])) {
        $destination = config('search_url');
}elseif(isset($_GET['action'])) {
        $destination = 'url_action';
}elseif(isset($_GET['do'])) {
        $destination = 'url_do';
}elseif( f( $uri, 'sitemap.xml' ) == 'sitemap.xml') {
        $destination = 'sitemap.xml';
}elseif( f( $uri, 'sitemap-post.xml' ) == 'sitemap-post.xml') {
        $destination = 'sitemap-post.xml';
}elseif( f( $uri, 'register' ) == 'register') {
        $destination = 'register';
}elseif( f( $uri, 'request' ) == 'request') {
        $destination = 'request';
}elseif( f( $uri, 'download' ) == 'download') {
        $destination = 'download';
}elseif( f( $uri, 'stream' ) == 'stream') {
        $destination = 'stream';
}elseif( f( $uri, 'slide' ) == 'slide') {
        $destination = 'slide';
}elseif( f( $uri, 'headmenu' ) == 'headmenu') {
        $destination = 'headmenu';
}elseif( f( $uri, 'headmenus' ) == 'headmenus') {
        $destination = 'headmenus';
}elseif( f( $uri, 'resetpasswords' ) == 'resetpasswords') {
        $destination = 'resetpasswords';
}elseif( strposa( dirname($uri), $arrayfuk ) ) {
        $destination = f( dirname($uri), $arrayfuk );
}else {
        $destination = 'homepage';
}

// echo options('url_sport'); die;
// echo $destination; die;
//debug( $destination );
switch ($destination){
	case 'homepage':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/index.php';
		break;
	case options('url_movie'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/movie.php';
		break;
	case options('url_th'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/th.php';
		break;
	case options('url_bg'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/bg.php';
		break;
	case options('url_zh'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/zh.php';
		break;
	case options('url_cs'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/cs.php';
		break;
	case options('url_da'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/da.php';
		break;
	case options('url_nl'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/nl.php';
		break;
	case options('url_fi'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/fi.php';
		break;
	case options('url_fr'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/fr.php';
		break;
	case options('url_ka'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/ka.php';
		break;
	case options('url_de'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/de.php';
		break;
	case options('url_el'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/el.php';
		break;
	case options('url_hu'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/hu.php';
		break;
	case options('url_ja'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/ja.php';
		break;
	case options('url_it'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/it.php';
		break;
	case options('url_ko'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/ko.php';
		break;
	case options('url_no'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/no.php';
		break;
	case options('url_pl'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/pl.php';
		break;
	case options('url_pt'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/pt.php';
		break;
	case options('url_ro'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/ro.php';
		break;
	case options('url_ru'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/ru.php';
		break;
	case options('url_ar'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/ar.php';
		break;
	case options('url_sr'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/sr.php';
		break;
	case options('url_sk'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/sk.php';
		break;
	case options('url_es'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/es.php';
		break;
	case options('url_sv'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/sv.php';
		break;
	case options('url_uk'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/uk.php';
		break;
	case options('url_vi'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/vi.php';
		break;
	case options('url_en'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/country/en.php';
		break;
	case options('slide'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'slide.php';
		break;
	case options('p-head'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'p-head.php';
		break;
	case options('headmenu'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'headmenu.php';
		break;
	case options('headmenus'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'headmenus.php';
		break;
	case options('resetpasswords'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'resetpasswords.php';
		break;
	case 'register':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/register.php';
		break;
	case 'request':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/request.php';
		break;
	case 'download':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/download.php';
		break;
	case 'stream':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/stream.php';
		break;
	case options('url_tv'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/tv.php';
		break;
	case options('url_tvdb'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/serie.php';
		break;
	case options('url_sport'):
		$goto =  DOCUMENT_ROOT.'/app/sports/index.php';
		break;
	case options('url_watch'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/watch.php';
		break;
	case config('category_url'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/category.php';
		break;
	case config('search_url'):
	case options('url_video'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/search.php';
		break;
	case 'url_action':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/'.$_GET['action'].'.php';
		break;
	case 'url_do':
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/'.options('url_page').'/'.$_GET['do'].'.php';
		break;
	case options('url_page'):
                $pathinfo = pathinfo ($uri) ;
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/'.options('url_page').'/'.$pathinfo['filename'].'.php';
		break;
	case options('url_single'):
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/single.php';
		break;
	case 'sitemap.xml':
		$goto =  APP_PATH.'/content/sitemap/sitemap.php';
		break;
	case 'sitemap-post.xml':
		$goto =  APP_PATH.'/content/sitemap/sitemap-post.php';
		break;
	default:
		$goto =  DOCUMENT_ROOT.'/themes/'.config('sitethemes').'/index.php';
		break;
}

//debug( $goto );
for ($i = 0; $i <= 1000; $i++) {
        if (strpos($uri, 'sitemap-'.$i.'.xml' ) !== false ) {
                if(file_exists( DOCUMENT_ROOT.'/app/content/sitemap/sitemap-'.$i.'.php')) {
                        include_once DOCUMENT_ROOT.'/app/content/sitemap/sitemap-'.$i.'.php';
                        exit;
                }
        }
}
if( file_exists( $goto ) ) 
{
	include $goto;
	exit;
}else{
	if(file_exists(__DIR__.'/../themes/'.config('sitethemes').'/index.php')) {
		include_once __DIR__.'/../themes/'.config('sitethemes').'/index.php';
		exit;
	}else{
		include __DIR__.'/class/welcome.php';
		exit;
	}
}
?>