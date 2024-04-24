<?php

// Development Settings Usama
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/webmarlins-new/us'); //edit
define('SITE_PATH','http://localhost/development/webmarlins-new/us'); //edit
define('BASE_PATH','/development/webmarlins-new/us'); //Edit path after htdocs in xampp



// Production Settings
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/us');
// define('SITE_PATH','https://development.webmarlins.com/us');
// define('BASE_PATH','/us');

$url = $_SERVER['REQUEST_URI'];
$current_page = basename($url);
if($current_page == "webmarlins-new" || $current_page == "us" ||$current_page == "" || $current_page == "webmarlins-new/us"){
    $current_page = "home";
}
$current_page_arr = explode('.',$current_page);
$current_page = $current_page_arr[0];
// die($current_page);
$description = array(
    "home" => "Web Marlins: Your trusted digital marketing agency in Illinois. We specialize in online marketing services to enhance your brand's visibility and drive business growth.",
    "about" => "Experience the digital marketing revolution with Web Marlins in Illinois. As pioneers, we offer cutting-edge strategies to transform your online presence and drive business growth.",
    "seo-services" => "Web Marlins, a leading SEO agency in Illinois, offers expert search engine optimization services. Boost your website's visibility, drive organic traffic, and achieve higher rankings on search engines.",
    "ppc-services" => "Web Marlins: Your trusted PPC agency in Illinois. Drive targeted traffic, increase conversions, and maximize ROI with our top-notch pay-per-click services.",
    "web-design-services" => "Elevate your online presence with Web Marlins, a leading web design company in Illinois. We offer innovative website designing services to create visually appealing and user-friendly websites.",
    "social-media-services" => "Web Marlins: Your trusted social media marketing agency in Illinois. Enhance your brand's online presence, engage your audience, and drive conversions with our effective SMO services.",
    "content-writing-services" => "Unlock the power of words with our expert content writing services. As a leading content writing company in Illinois, we deliver engaging and persuasive content to captivate your audience and drive conversions.",
    "web-development-services" => "Web Marlins: Your trusted website development agency in Illinois. We provide top-notch web development services to create stunning, user-friendly, and functional websites.",
    "email-marketing-services" => "Web Marlins: Your go-to email marketing agency in Illinois. Harness the power of bulk email marketing to engage customers and drive conversions.",
    "our-work" => "Web Marlins: Explore our impressive portfolio showcasing our previous works. See our expertise in action and get inspired for your next project.",
    "contact" => "Ready to take your digital presence to the next level? Get in touch with us today! Contact our team in Illinois to discuss your goals and explore how we can help you achieve success online.",
    "privacy-policy" => "Discover how Webmarlins Pvt. Ltd., based in Illinois, safeguards your privacy. Our Privacy Policy details how we collect, use, and protect your personal information.",
    "terms-and-conditions" => "Explore the Terms and Conditions governing the use of Webmarlins Pvt. Ltd.'s services in Illinois. Learn about your rights and responsibilities when interacting with our platform.",
    "local-seo-services" => "Enhance your local business visibility with Web Marlins, a top-notch local SEO agency in Illinois. Drive growth with tailored local SEO services.",
);
$title = array(
    "home" => "Digital Marketing Agency in Illinois | Online Marketing Services - Web Marlins",
    "about" => "Revolutionizing Digital Marketing in Illinois - Web Marlins",
    "seo-services" => "SEO Agency in Illinois | Search Engine Optimization Services - Web Marlins",
    "ppc-services" => "PPC Agency in Illinois | Pay Per Click Services - Web Marlins",
    "web-design-services" => "Web Design Company in Illinois | Website Designing Services - Web Marlins",
    "social-media-services" => "Social Media Marketing Agency in Illinois | SMO Services - Web Marlins",
    "content-writing-services" => "Content Writing Company in Illinois | Content Writing Services - Web Marlins",
    "web-development-services" => "Website Development Agency in Illinois | Web Development Services - Web Marlins",
    "email-marketing-services" => "Email Marketing Agency in Illinois | Bulk Email Marketing Services - Web Marlins",
    "our-work" => "Showcase of Our Portfolio - Web Marlins",
    "contact" => "Connect to Us | Contact Us - Web Marlins",
    "privacy-policy" => "Privacy Policy | Web Marlins: Your Privacy Our Priority",
    "terms-and-conditions" => "Terms and Conditions | Web Marlins: Your Guide to Using Our Services",
    "local-seo-services" => "Local SEO Services | Local SEO Agency in Illinois - Web Marlins",
);
?>