<?php
include "./backend/country/Country.php";
$country = Country::getCountryCode();
if($country != "us" || $country != "US")
      $country = "in";
$country = strtolower($country);
header('location:'.$country."/");
?>