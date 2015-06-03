<?php

    if(isset($_REQUEST['section3'])){
        include_once('model-xhr/application/dream/show.php');
        include_once('view/include/header.php');
        include_once('view/application/dream/show.php');
    }
    else{
        ProcessError();
    }