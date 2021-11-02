<?php

namespace MVC;
class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);
//        var_dump($url);
//        die;
        if ($url == "/mvc/") {
            $request->controller = "tasks";
            $request->action = "index";
            $request->params = [];
        } else {
            $explode_url = explode('/', $url);//bam mang ngan cach theo
            $explode_url = array_slice($explode_url, 2);//tra ve mang tuy chon (bat dau tu 2)
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }

    }
}

?>