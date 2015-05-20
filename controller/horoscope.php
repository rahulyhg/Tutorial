<?php

require_once('model/sign-functions.php');
    if(isset($_REQUEST['section1'])){
        if(ExistSign($bdd, $_REQUEST['section1'])) {
            include_once('model/sign.php');
            include_once('view/include/header.php');
            include_once('view/sign.php');
        }
        else{
            ProcessError();
        }
    }
    else{
        echo 'not implemented';
    }