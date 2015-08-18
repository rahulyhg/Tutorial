<?php

    if(isset($_REQUEST['section3'])) {
        include_once('view/include/header.php');
        include_once('model-xhr/application/dream/dream.php');
        include_once('view/application/dream/dream.php');
    }
    else{
        ProcessError();
    }