<?php

// Development Settings Usama
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/webmarlins-new/in'); //edit
define('SITE_PATH','http://localhost/development/webmarlins-new/in'); //edit
define('BASE_PATH','/development/webmarlins-new/in'); //Edit path after htdocs in xampp



// Production Settings
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/in');
// define('SITE_PATH','https://development.webmarlins.com/in');
// define('BASE_PATH','/in');

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
    "about" => "About Us | Web Marlins Pvt. Ltd.",
    "seo-services" => "Seo Services | Web Marlins Pvt. Ltd.",
    "ppc-services" => "PPC Services | Web Marlins Pvt. Ltd.",
    "social-media-marketing-services" => "SMM Services | Web Marlins Pvt. Ltd.",
    "email-marketing-services" => "Email Marketing Services | Web Marlins Pvt. Ltd.",
    "web-designing-services" => "Web Designing Services | Web Marlins Pvt. Ltd.",
    "web-development-services" => "Web Development Services | Web Marlins Pvt. Ltd.",
    "content-writing-services" => "Content Writing Services | Web Marlins Pvt. Ltd.",
    "local-seo-services" => "Local SEO Services | Web Marlins Pvt. Ltd.",
    "our-work" => "Our Work | Web Marlins Pvt. Ltd.",
    "contact" => "Email Marketing Services | Web Marlins Pvt. Ltd.",
    "terms-and-conditions" => "Terms and Conditions | Web Marlins Pvt. Ltd.",
    "privacy-policy" => "Privacy Policy | Web Marlins Pvt. Ltd.",
);
$title = array(
    "home" => "Web Marlins Pvt. Ltd.",
    "about" => "About Us | Web Marlins Pvt. Ltd.",
    "seo-services" => "Seo Services | Web Marlins Pvt. Ltd.",
    "ppc-services" => "PPC Services | Web Marlins Pvt. Ltd.",
    "social-media-marketing-services" => "SMM Services | Web Marlins Pvt. Ltd.",
    "email-marketing-services" => "Email Marketing Services | Web Marlins Pvt. Ltd.",
    "web-designing-services" => "Web Designing Services | Web Marlins Pvt. Ltd.",
    "web-development-services" => "Web Development Services | Web Marlins Pvt. Ltd.",
    "content-writing-services" => "Content Writing Services | Web Marlins Pvt. Ltd.",
    "local-seo-services" => "Local SEO Services | Web Marlins Pvt. Ltd.",
    "our-work" => "Our Work | Web Marlins Pvt. Ltd.",
    "contact" => "Email Marketing Services | Web Marlins Pvt. Ltd.",
    "terms-and-conditions" => "Terms and Conditions | Web Marlins Pvt. Ltd.",
    "privacy-policy" => "Privacy Policy | Web Marlins Pvt. Ltd.",
);
?>