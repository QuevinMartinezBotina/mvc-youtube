<?php


class Controller
{

    private $view;

    public function __construct()
    {
        echo __CLASS__ . 'Intanciado';
    }

    public function exec()
    {
        echo '<br> Ejecutando metodo exec';
    }
}
