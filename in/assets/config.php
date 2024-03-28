<?php

// Development Settings Usama
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/webmarlins-new/in'); //edit
define('SITE_PATH','http://localhost/development/webmarlins-new/in'); //edit
define('BASE_PATH','/development/webmarlins-new/in'); //Edit path after htdocs in xampp



// Production Settings
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/in');
// define('SITE_PATH','https://development.webmarlins.com/in');
// define('BASE_PATH','');

$url = $_SERVER['REQUEST_URI'];
$current_page = basename($url);
if($current_page == "webmarlins-new" || $current_page == "in" ||$current_page == "" || $current_page == "webmarlins-new/in"){
    $current_page = "home";
}
$current_page_arr = explode('.',$current_page);
$current_page = $current_page_arr[0];
// die($current_page);
$description = array(
    "home" => "Web Marlins Pvt. Ltd.",
    "seo-services" => "Seo Services | Web Marlins Pvt. Ltd.",
);
$title = array(
    "home" => "Web Marlins Pvt. Ltd.",
    "seo-services" => "Seo Services | Web Marlins Pvt. Ltd.",
);
?>