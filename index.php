<?php
include "./backend/country/Country.php";
$country = Country::getCountryCode();
if($country == "")
    $country = "in";
header('location:'.$country."/");
die();
?>