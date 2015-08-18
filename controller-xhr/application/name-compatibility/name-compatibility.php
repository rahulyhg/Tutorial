<?php

if(isset($_REQUEST['section2'])){
    if(file_exists('controller-xhr/application/name-compatibility/'.$_REQUEST['section2'].'.php')){
        include_once('controller-xhr/application/name-compatibility/'.$_REQUEST['section2'].'.php');
    }
    else{
        ProcessError();
    }
}
else{
    include_once('model-xhr/application/name-compatibility/name-compatibility.php');
    include_once('view/include/header.php');
    include_once('view/application/name-compatibility/name-compatibility.php');
}