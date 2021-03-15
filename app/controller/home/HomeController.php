<?php

class HomeController extends Controller
{
    public function __construct()
    {
        var_dump(__CLASS__);
    }

    public function exec()
    {
        echo "Hola mundo";
    }
}
