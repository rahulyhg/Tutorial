<?php

if(isset($_REQUEST['section2'])){
    if(file_exists('controller-xhr/application/dream/'.$_REQUEST['section2'].'.php')){
        include_once('controller-xhr/application/dream/'.$_REQUEST['section2'].'.php');
    }
    else{
        ProcessError();
    }
}
else{
    include_once('model-xhr/application/dream/dream.php');
    include_once('view/include/header.php');
    include_once('view/application/dream/dream.php');
}