<?php

    if(isset($_REQUEST['section2'])) {
        if(file_exists('controller-xhr/application/life-duration/'.$_REQUEST['section2'].'.php')){
            include_once('controller-xhr/application/life-duration/'.$_REQUEST['section2'].'.php');
        }
    }
    else{
        include_once('model-xhr/application/life-duration/life-duration.php');
        include_once('view/include/header.php');
        include_once('view/application/life-duration/life-duration.php');
    }