<?php

    if(isset($_REQUEST['section1'])){
        if(file_exists('controller-xhr/application/'.$_REQUEST['section1'].'/'.$_REQUEST['section1'].'.php')){
            include_once('controller-xhr/application/'.$_REQUEST['section1'].'/'.$_REQUEST['section1'].'.php');
        }
        else{
            ProcessError();
        }
    }