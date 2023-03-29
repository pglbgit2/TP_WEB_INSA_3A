<?php
abstract class Controller
{
    public function model(string $model) {
        include_once('../models/' . $model . '.php');
        $this->$model = new $model();
    }

    public function view($view, $data=[])
    {
        require_once( '../views/' . strtolower(get_class($this)) . '/' . $view . '.php');
        $content = ob_get_clean();
    }
}
    