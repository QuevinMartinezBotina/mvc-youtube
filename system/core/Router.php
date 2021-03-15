<?php

class Router
{
    public $uri; /* Se refiere a la URL */
    public $controller; /* Se refiere a el nombre de clase del controlador que estamos solicitando */
    public $method; /* Se refiere al metodo */
    public $param; /* Se refiere al parametro */

    public function __construct()
    {
        $this->setUri();
        $this->setController();
        $this->setMethod();
        $this->setParam();
    }


    public function setUri()
    {
        $this->uri = explode('/', URI);/* Por cada '/' va a separar lso datos y meterlos en un array */
    }

    public function setController()
    {
        /*Verificamos si la 2 posición del array de la url esta vacia lo manadamos a 'Home' de lo contrario,
        si est alleno lo mandamos al lugar que esta en la url */
        $this->controller = $this->uri[2] === '' ? 'Home' : $this->uri[2];
    }

    public function setMethod()
    {
        /* Si el metodo esta lleno pues dejamos el metodo, si esta vacio colocamos 'exec' */
        $this->method = !empty($this->uri[3] ? $this->uri[3] : 'exec');
    }

    public function setParam()
    {

        /* Si tene valor en Param pues se le asigna el valor que ya tiene, si no lo dejamos vacio */
        $this->param = !empty($this->uri[4] ? $this->uri[4] : '');
    }


    /* -+-+-+-+ AQUI PASAMOS A RETORNAR -+-+-+-+- */

    public function getUri()
    {
        return $this->uri;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getParam()
    {
        return $this->param;
    }
}
