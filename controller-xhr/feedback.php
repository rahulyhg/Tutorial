<?php

    if(isset($_REQUEST['section1'])){
        if(file_exists('controller-xhr/feedback/'.$_REQUEST['section1'].'.php')){
            include_once('controller-xhr/feedback/'.$_REQUEST['section1'].'.php');
        }
        else{
            ProcessError();
        }
    }
    else{
        ProcessError();
    }