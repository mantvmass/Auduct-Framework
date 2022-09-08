<?php

    require("auduct/auduct.php");
    include("auduct/render.php");
    use auduct\module\Auduct;

    $app = new Auduct();


    $app::route('/', $methods=["GET"], function(){
        return render_template("welcome");
    });

    $app::route('/introduction', $methods=["GET"], function(){
        echo "Introduction";
    });


    // router::errorhandler(404, function(){
    //     echo "page not found";
    // });


?>