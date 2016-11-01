<?php

namespace App;

abstract class AController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}