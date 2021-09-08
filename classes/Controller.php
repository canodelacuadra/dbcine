<?php
class Controller
{


    public function __construct()
    {
    }
    public function get_model($model)
    {
        require $model;
    }

    public function get_view($view)
    {
        require $view;
    }
}
