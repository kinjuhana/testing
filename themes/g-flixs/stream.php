<?php error_reporting(E_ALL ^ E_NOTICE); 
require_once('include/function.php');
require_once('include/GeoIP.php');
require_once($_SERVER['DOCUMENT_ROOT'] .'/app/config/autoload.php');
$urlPath = $_SERVER["REQUEST_URI"];
$dirname = str_replace('/stream?movie=','',$urlPath);
$judul   = urldecode($dirname);

if ( $country == "US" ) {
    $uri_affilate = config('offer_link1');
} elseif ( $country == "SE" || $country == "CH" || $country == "FI" || $country == "BE" || $country == "NO" || $country == "LU" || $country == "IE" || $country == "CL" || $country == "IT" || $country == "KW" || $country == "TT" || $country == "TR" || $country == "PT" || $country == "CY" || $country == "JM" || $country == "HT" || $country == "VG" || $country == "CO" ) {
    $uri_affilate = config('offer_link1');
} elseif ( $country == "DK" || $country == "NL" || $country == "DE" || $country == "ES" || $country == "FR" || $country == "HK" || $country == "AE" || $country == "AU" || $country == "NZ" || $country == "PR" || $country == "SA" || $country == "AN" || $country == "AT" || $country == "AW" || $country == "BM" || $country == "BS" || $country == "EC" || $country == "EE" || $country == "GF" || $country == "GL" || $country == "GP" || $country == "GR" || $country == "HR" || $country == "HU" || $country == "LT" || $country == "MO" || $country == "MQ" || $country == "MT" || $country == "NC" || $country == "OM" || $country == "PF" || $country == "PL" || $country == "PY" || $country == "QA" || $country == "RE" || $country == "SI" || $country == "SK" || $country == "UY" || $country == "CZ" || $country == "CA" || $country == "GB" || $country == "JO" || $country == "NP" || $country == "AZ" || $country == "AG" || $country == "YE" || $country == "ROW" || $country == "GT" || $country == "MP" || $country == "VI" || $country == "LA" || $country == "PS" || $country == "AM" || $country == "TM" || $country == "BO" || $country == "FM" || $country == "PM" ) {
    $uri_affilate = config('offer_link1');
} elseif ( $country == "AF" || $country == "AX" || $country == "DZ" || $country == "AS" || $country == "AD" || $country == "AI" || $country == "AQ" || $country == "AR" || $country == "BH" || $country == "BD" || $country == "BB" || $country == "BY" || $country == "BZ" || $country == "BT" || $country == "BA" || $country == "BW" || $country == "BV" || $country == "IO" || $country == "BN" || $country == "BG" || $country == "BF" || $country == "BI" || $country == "KH" || $country == "CV" || $country == "KY" || $country == "CF" || $country == "TD" || $country == "CX" || $country == "CC" || $country == "KM" || $country == "CD" || $country == "CK" || $country == "CR" || $country == "CU" || $country == "DJ" || $country == "DM" || $country == "DO" || $country == "EG" || $country == "SV" || $country == "GQ" || $country == "ER" || $country == "FK" || $country == "FO" || $country == "FJ" || $country == "GF" || $country == "TF" || $country == "GM" || $country == "GE" || $country == "GH" || $country == "GI" || $country == "GD" || $country == "GU" || $country == "GN" || $country == "GY" || $country == "HM" || $country == "VA" || $country == "HN" || $country == "IS" || $country == "IQ" || $country == "KI" || $country == "KG" || $country == "LV" || $country == "LB" || $country == "LS" || $country == "LR" || $country == "LI" || $country == "MK" || $country == "MW" || $country == "MV" || $country == "MH" || $country == "MU" || $country == "YT" || $country == "MX" || $country == "MD" || $country == "MC" || $country == "MN" || $country == "ME" || $country == "MS" || $country == "MA" || $country == "MZ" || $country == "NA" || $country == "NR" || $country == "NI" || $country == "NU" || $country == "NF" || $country == "PW" || $country == "PA" || $country == "PG" || $country == "PN" || $country == "RO" || $country == "RW" || $country == "KN" || $country == "LC" || $country == "VC" || $country == "WS" || $country == "SM" || $country == "ST" || $country == "RS" || $country == "SC" || $country == "SL" || $country == "SB" || $country == "SO" || $country == "ZA" || $country == "SS" || $country == "LK" || $country == "SR" || $country == "SJ" || $country == "TJ" || $country == "TZ" || $country == "TL" || $country == "TK" || $country == "TO" || $country == "TC" || $country == "TV" || $country == "UG" || $country == "UM" || $country == "VU" || $country == "VE" || $country == "WF" || $country == "EH" || $country == "ZM" || $country == "ZW" ) {
    $uri_affilate = config('offer_link1');
} elseif ( $country == "KZ" || $country == "PE" || $country == "BR" || $country == "TW" || $country == "AO" || $country == "CM" || $country == "CN" || $country == "CI" || $country == "ET" || $country == "ID" || $country == "IR" || $country == "IL" || $country == "KE" || $country == "LY" || $country == "MG" || $country == "MY" || $country == "PK" || $country == "AL" || $country == "SN" || $country == "SD" || $country == "TN" || $country == "UA" ) {
    $uri_affilate = config('offer_link1');
} elseif ( $country == "SG" || $country == "PH" || $country == "TH" || $country == "IN" || $country == "VN" || $country == "MM" ) {
    $uri_affilate = config('offer_link1');
} else {
    $uri_affilate = config('offer_link1');
} 
?>

<html>
<HEAD>
    <title>Sign Up for Free</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="refresh" content="0;url=<?php echo $uri_affilate;?>">
    <meta name="referrer" content="origin" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="googlebot" content="noindex">
    <style type="text/css">.status,.title{font-size:18px}body{margin:0;font-family:Arial,sans-serif;background-color:#fff;color:#333}.gotostoreWrapper{margin:auto;position:absolute;top:0;right:0;bottom:0;left:0;height:75%;text-align:center}.msp-logo img{width:175px}.title{margin-top:20px}.title .red{color:#c00}.status{margin-top:90px;font-weight:700}.status img{margin-left:5px;vertical-align:middle}.loading{margin-top:25px}.store-link{text-decoration:none;font-size:12px;color:#666}.store-link:hover{color:#999}.offer{margin-top:90px}        </style>
</HEAD>
<BODY>
<div class="gotostoreWrapper">
<div class="msp-logo">
</div>
<div class="title"><h1>Please Wait...</h1></div>
<div class="title"><p>You are opening the registration page to stream <span class="red"><?php echo $judul;?> </span> Movies for Free</div></p>
<div class="status">Loading...</div>
<div class="loading">
<img src="/images/loading.gif" alt="Loading..." />
</div>
<br>
<div class="message">
<a class="store-link" href="<?php echo $uri_affilate;?>">(if taking long, click here)</a>
<br clear="all" />
<br />
<br />
</div>
</div>
<?php echo histats_write() ?>

</BODY>
</html>