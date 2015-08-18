<?php

define('ROOT_HOST', '/zodiacool/');
session_start();

if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'] . substr(ROOT_HOST, 1) . 'upload');
} else {
    define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'] . ROOT_HOST . 'upload');
}

require_once('model/database.inc.php');
require_once('model/global-functions.php');

if(!isset($_REQUEST['section'])){
    include_once('controller/home.php');
}
else if(isset($_REQUEST['section']))
{
    if(file_exists('controller/'.$_REQUEST['section'].'.php')) {
        include_once('controller/' . $_REQUEST['section'] . '.php');
    }
    else if(file_exists('controller-xhr/'.$_REQUEST['section'].'.php')){
        include_once('controller-xhr/'.$_REQUEST['section'].'.php');
    }
    else{
        //ProcessError();
        echo 'not-found';
    }
}
else{
    ProcessError();
}
?>