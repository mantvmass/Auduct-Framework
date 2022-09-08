<?php

    function render_template($view){
        return include_once("templates/" . $view . ".php");
    }

?>