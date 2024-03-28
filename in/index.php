<?php
include_once("assets/config.php");
$request = $url;
$router = str_replace(BASE_PATH,'',$request);
if($router == '/'){
    include_once('home.php');
}
elseif($router == '/seo-services'){
    include_once('seo.php');
}
else{
    include_once('404.php');
}
?>