<?php
// PHP code to extract IP 

class Country{
    public static function getVisIpAddr() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
    public static function getCountryCode(){
        $ip = Country::getVisIpAddr();
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        return $ipdat->geoplugin_countryCode;
    }    
    
    public static function getCountryName(){
        $ip = Country::getVisIPAddr();
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        return $ipdat->geoplugin_countryName;
    }    
}
?>