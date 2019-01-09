<?php

namespace  Shop\Services;


class Router{

    public  $routes = [
        [
            "method" => "GET",
            "path" => "/product/[:id]",
            "className" => "\Shop\Product\Controller"

        ]
    ];

    public  function  dispatch()
    {
        $klein = new \Klein\Klein();


        foreach ($this->routes as $route) {
            $klein->respond('GET', '/product/[:id]',
                function ($request, $response) use ($route) {
            $controller = new  $route['className']();
            return $controller->execute($request, $response);
        });
        }
         $klein->dispatch();
    }
}