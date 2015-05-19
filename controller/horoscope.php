<?php

    if(isset($_REQUEST['section1'])){
        include_once('model/sign.php');
        include_once('view/sign.php');
    }
    else{
        echo 'not implemented';
    }