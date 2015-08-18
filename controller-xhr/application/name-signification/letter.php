<?php

if(isset($_REQUEST['section3'])) {
    include_once('view/include/header.php');
    include_once('model-xhr/application/name-signification/name-signification.php');
    include_once('view/application/name-signification/name-signification.php');
}
else{
    ProcessError();
}