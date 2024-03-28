
<!--
<?php

// دریافت اطلاعات از API
$url = "https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/price_dollar_rl/latest.json";
$json = file_get_contents($url);

// تبدیل JSON به آرایه
$data = json_decode($json, true);

// استخراج قیمت
$price = "0" . $data['p']; // اضافه کردن 0 به ابتدای قیمت

// تبدیل قیمت به عدد اعشاری و حذف کاما
$price = floatval(str_replace(',', '', $price));

// نمایش قیمت
// echo "قیمت دلار: " . number_format($price) . " تومان";

?>
-->

 
<?php
// ? START CALL API
// ! USD PRICE  دلار
$usdurl = "https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/price_dollar_rl/latest.json";
$usdjson = file_get_contents($usdurl);
$usddata = json_decode($usdjson, true);
$usdprice = "0" . $usddata['p'];
$usdprice = floatval(str_replace(',', '', $usdprice));
// ! GBP PRICE قیمت پوند
$gbpurl = "https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/price_gbp/latest.json";
$gbpjson = file_get_contents($gbpurl);
$gbpdata = json_decode($gbpjson, true);
$gbpprice = "0" . $gbpdata['p'];
$gbpprice = floatval(str_replace(',', '', $gbpprice));
// ! EUR PRICE قیمت یورو
$eururl = "https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/price_eur/latest.json";
$eurjson = file_get_contents($eururl);
$eurdata = json_decode($eurjson, true);
$eurprice = "0" . $eurdata['p'];
$eurprice = floatval(str_replace(',', '', $eurprice));
// ! mesghal PRICE قیمت مثقال طلا
$mesghalurl = "https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/mesghal/latest.json ";
$mesghaljson = file_get_contents($mesghalurl);
$mesghaldata = json_decode($mesghaljson, true);
$mesghalprice = "0" . $mesghaldata['p'];
$mesghalprice = floatval(str_replace(',', '', $mesghalprice));
// // ! retail_sekeE PRICE قیمت سکه امامی
// $sekeEurl = "https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/retail_sekee/latest.json ";
// $sekeEjson = file_get_contents($sekeEurl);
// $sekeEdata = json_decode($sekeEjson, true);
// $sekeEprice = "0" . $sekeEdata['p'];
// $sekeEprice = floatval(str_replace(',', '', $sekeEprice));
// // ! retail_sekeb PRICE قیمت سکه تمام بهار ازادی
// $sekeburl = " https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/retail_sekeb/latest.json";
// $sekebjson = file_get_contents($sekeburl);
// $sekebdata = json_decode($sekebjson, true);
// $sekebprice = "0" . $sekebdata['p'];
// $sekebprice = floatval(str_replace(',', '', $sekebprice));
$sekeee =  "360,200,000";
$robe = "144,000,000";
// ! retail_nim PRICE قیمت نیم سکه
$nimurl = "https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/retail_nim/latest.json ";
$nimjson = file_get_contents($nimurl);
$nimdata = json_decode($nimjson, true);
$nimprice = "0" . $nimdata['p'];
$nimprice = floatval(str_replace(',', '', $nimprice));
// // ! retail_rob PRICE قیمت ربع سکه 
// $roburl = " https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/retail_rob/latest.json";
// $robjson = file_get_contents($roburl);
// $robdata = json_decode($robjson, true);
// $robprice = "0" . $robdata['p'];
// $robprice = floatval(str_replace(',', '', $robprice));
// ! retail_gerami PRICE قیمت سکه گرمی
$geramiurl = "https://raw.githubusercontent.com/margani/pricedb/main/tgju/current/retail_gerami/latest.json";
$geramijson = file_get_contents($geramiurl);
$geramidata = json_decode($geramijson, true);
$geramiprice = "0" . $geramidata['p'];
$geramiprice = floatval(str_replace(',', '', $geramiprice));
// ? END CALL API
?>
<!-- 
    <marquee behavior="" direction="right" style="color:#F6F6F6; background:#B90504; font-size:2rem;">
    <?php echo " دلار: " . number_format($usdprice) . " ";?>
    &nbsp;&nbsp;&nbsp;
    <?php echo " پوند: " . number_format($gbpprice) . " ";?>
    &nbsp;&nbsp;&nbsp;
    <?php echo " یورو: " . number_format($eurprice) . " ";?>
    &nbsp;&nbsp;&nbsp;
    <?php echo " مثقال طلا	: " . number_format($mesghalprice) . " ";?>
    &nbsp;&nbsp;&nbsp;
    <?php echo " نیم سکه بهار آزادی	: " . number_format($nimprice) . " ";?>
    &nbsp;&nbsp;&nbsp;
    <?php echo " سکه گرمی: " . number_format($geramiprice) . " ";?>
    &nbsp;&nbsp;&nbsp;
    

</marquee> -->



