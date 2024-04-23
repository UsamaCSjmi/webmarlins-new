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
    "home" => "Web Marlins: Your trusted digital marketing agency in Delhi. We specialize in online marketing services to enhance your brand's visibility and drive business growth.",
    "about" => "Experience the digital marketing revolution with Web Marlins. As pioneers since 2017, we offer cutting-edge strategies to transform your online presence and drive business growth. ",
    "seo-services" => "Web Marlins, a leading SEO agency in Delhi, offers expert search engine optimization services. Boost your website's visibility, drive organic traffic, and achieve higher rankings on search engines.",
    "ppc-services" => "Web Marlins: Your trusted PPC agency in Delhi. Drive targeted traffic, increase conversions, and maximize ROI with our top-notch pay-per-click services. ",
    "web-design-services" => "Elevate your online presence with Web Marlins, a leading web design company in Delhi. We offer innovative website designing services to create visually appealing and user-friendly websites.",
    "social-media-services" => "Your trusted social media marketing agency in Delhi. Enhance your brand's online presence, engage your audience, and drive conversions with our effective SMO services.",
    "content-writing-services" => "Unlock the power of words with our expert content writing services. As a leading content writing company in Delhi, we deliver engaging and persuasive content to captivate your audience and drive conversions.",
    "web-development-services" => "Your trusted website development agency in Delhi. We provide top-notch web development services to create stunning, user-friendly, and functional websites. ",
    "email-marketing-services" => "Web Marlins: Your go-to email marketing agency in Delhi. Harness the power of bulk email marketing to engage customers and drive conversions. ",
    "local-seo-services" => "Enhance your local business visibility with Web Marlins, a top-notch local SEO agency in Delhi. Drive growth with tailored local SEO services.",
    "our-work" => "Explore our impressive portfolio showcasing our previous works. See our expertise in action and get inspired for your next project.",
    "contact" => "Ready to take your digital presence to the next level? Get in touch with us today! Contact our team to discuss your goals and explore how we can help you achieve success online.",
    "privacy-policy" => "Learn about our commitment to protecting your privacy at Webmarlins Pvt. Ltd., based in Delhi. Our Privacy Policy outlines how we collect, use, and protect your personal information.",
    "terms-and-conditions" => "Review our Terms and Conditions to understand the rules and guidelines for using our services at Webmarlins Pvt. Ltd. in Delhi. Learn about your rights and obligations when engaging with our platform.",
);
$title = array(
    "home" => "Digital Marketing Agency in Delhi | Online Marketing Services - Web Marlins",
    "about" => "Revolutionizing Digital Marketing Since 2017 - Web Marlins",
    "seo-services" => "SEO Agency in Delhi | Search Engine Optimization Services - Web Marlins",
    "ppc-services" => "PPC Agency in Delhi | Pay Per Click Services - Web Marlins",
    "web-design-services" => "Web Design Company in Delhi | Website Designing Services - Web Marlins",
    "social-media-services" => "Social Media Marketing Agency in Delhi | SMO Services - Web Marlins",
    "content-writing-services" => "Content Writing Company in Delhi | Content Writing Services - Web Marlins",
    "web-development-services" => "Website Development Agency in Delhi | Web Development Services - Web Marlins",
    "email-marketing-services" => "Email Marketing Agency in Delhi | Bulk Email Marketing Services - Web Marlins",
    "local-seo-services" => "Local SEO Services | Local SEO Agency in Delhi - Web Marlins",
    "our-work" => "Showcase of Our Previous Works - Web Marlins",
    "contact" => "Get in Touch With Us | Contact Us - Web Marlins",
    "privacy-policy" => "Privacy Policy - Web Marlins: Your Privacy Matters to Us",
    "terms-and-conditions" => "Terms and Conditions | Web Marlins - Understand Our Policies",
);
?>