<?php error_reporting(E_ALL ^ E_NOTICE); 
require_once('include/function.php');
require_once('include/GeoIP.php');
    /*
    |--------------------------------------------------------------------------
    | List Country ID = http://countryid.com
    |--------------------------------------------------------------------------
    | example atau contoh below:
    | $uri_affilate = '..............';
    */
if ( $country == "US" ) {
    header('Location: '. $_SESSION['PHP_SELF']);
} elseif ( $country == "AU" || $country == "CA" || $country == "UK" || $country == "NZ" || $country == "BE" || $country == "NO" || $country == "SE" || $country == "DK" || $country == "IE" || $country == "GR" || $country == "CH" || $country == "FI" ) {
    header('Location: '. $_SESSION['PHP_SELF']);
} elseif ( $country == "JP" ) {
    header('Location: https://'.$hostname.'/ja/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "HK" || $country == "TW" || $country == "CN" || $country == "MO" || $country == "VN" ) {
    header('Location: https://'.$hostname.'/zh/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "ES" || $country == "AR" || $country == "PT" || $country == "CO" || $country == "CL" || $country == "VE" || $country == "PE" || $country == "EC" || $country == "GT" || $country == "BO" || $country == "HN" || $country == "PY" || $country == "CR" || $country == "PA" || $country == "BR" || $country == "MX" ) {
    header('Location: https://'.$hostname.'/es/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "DE" ) {
    header('Location: https://'.$hostname.'/de/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "NL" ) {
    header('Location: https://'.$hostname.'/nl/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "TH" ) {
    header('Location: https://'.$hostname.'/th/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "FR" ) {
    header('Location: https://'.$hostname.'/fr/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "IT" ) {
    header('Location: https://'.$hostname.'/it/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "KR" ) {
    header('Location: https://'.$hostname.'/ko/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "RS" ) {
    header('Location: https://'.$hostname.'/sr/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "RO" ) {
    header('Location: https://'.$hostname.'/ro/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "CZ" || $country == "SK" || $country == "SI" ) {
    header('Location: https://'.$hostname.'/cs/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "RU" ) {
    header('Location: https://'.$hostname.'/ru/'.$row['id'].'/'.seo_strip($row['title']).'.html');
} elseif ( $country == "PL" ) {
    header('Location: https://'.$hostname.'/pl/'.$row['id'].'/'.seo_strip($row['title']).'.html');    
} else {
    header('Location: '. $_SESSION['PHP_SELF']);
}
?>