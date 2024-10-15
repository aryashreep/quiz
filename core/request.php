<?php
class Request
{
    /*
     * This function returns the URI of the request.
     */
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
    /*
     * This function returns the method (I.E. GET, POST, etc) of the request.
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function fullUrl(){
        return (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    public static function queryParam($url)
    {
        $url_components = parse_url($url);
        @parse_str($url_components['query'], $params);
        return $params;
    }
}

?>