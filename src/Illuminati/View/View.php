<?php

namespace Illuminati\View;

class View {

    public $prefix_make = "templates/";
    public $prefix_assets = "statics/";

    public function assets($assets){
        return $this -> prefix_assets . $assets;
    }

    public function make($view){
        return include_once($this -> prefix_make . $view . ".php");
    }

}