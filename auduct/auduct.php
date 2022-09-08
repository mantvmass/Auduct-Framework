<?php

// require_once __DIR__ . 'components/xx.php';

    namespace auduct\module; // declare namespace

    class Auduct {

        public static function route($route, $methods=["GET"], $function){
            $request_url = $_SERVER['REQUEST_URI'];
            // echo $_SERVER['REQUEST_METHOD'];
            if ($route == $request_url) {
                $function(); // call function
            }
            // die(); // prevent checking all other routes
        }


        // public static function errorhandler($code, $function){
        //     http_response_code($code); // send http error code
        //     $function(); // call function
        // }

    }

?>