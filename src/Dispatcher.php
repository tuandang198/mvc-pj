<?php
namespace MVC;

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();

        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);//tim controller
    }

    public function loadController()
    {
        $name = 'MVC\\Controllers\\' .ucfirst($this->request->controller).'Controller';
        $controller=new $name();
        return $controller;
    }

}
?>