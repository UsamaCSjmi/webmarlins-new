<?php
include_once("assets/config.php");
$request = $url;
$router = str_replace(BASE_PATH,'',$request);
if($router == '/'){
    include_once('home.php');
}
elseif($router == '/about'){
    include_once('about.php');
}
elseif($router == '/seo-services'){
    include_once('seo.php');
}
elseif($router == '/local-seo-services'){
    include_once('local-seo.php');
}
elseif($router == '/ppc-services'){
    include_once('ppc.php');
}
elseif($router == '/web-design-services'){
    include_once('web-des.php');
}
elseif($router == '/web-development-services'){
    include_once('web-dev.php');
}
elseif($router == '/social-media-services'){
    include_once('smm.php');
}
elseif($router == '/email-marketing-services'){
    include_once('email-mar.php');
}
elseif($router == '/content-writing-services'){
    include_once('con-wrt.php');
}
elseif($router == '/our-work'){
    include_once('work.php');
}
elseif($router == '/contact'){
    include_once('contact.php');
}
elseif($router == '/privacy-policy'){
    include_once('privacy.php');
}
elseif($router == '/sitemap'){
    include_once('sitemap.php');
}
elseif($router == '/terms-and-conditions'){
    include_once('tnc.php');
}
else{
    include_once('404.php');
}
?>