<?php

//this class will get uri and parse it to parts:
// controller, action and params.
class Router
{
    protected $uri;
    protected $controller;
    protected $action;
    protected $params;

    /**
     * Router constructor.
     * @param $uri
     */
    public function __construct($uri)
    {
        print_r('ok, router was called with uri: '.$uri);
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }


}