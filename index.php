<?php
include "./backend/country/Country.php";
$country = Country::getCountryCode();
if($country != "us" && $country != "US"){
      $country = "in";
}
$country = strtolower($country);
$file = basename($_SERVER['REQUEST_URI']);
if($file == "robots.txt" || $file == "sitemap.xml"){
      header('location:'.$country."/".$file);
      die();
}
header('location:'.$country."/");
?>