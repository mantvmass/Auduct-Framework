<?php

namespace Illuminati\View;

class View {

    public static $prefix_make = "templates/";
    public static $prefix_assets = "statics/";

    public static function assets($assets){
        return self::$prefix_assets . $assets;
    }

    public static function make($view){
        return require_once(self::$prefix_make . $view . ".php");
    }

}