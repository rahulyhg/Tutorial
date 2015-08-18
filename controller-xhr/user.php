<?php
require_once('model/global-functions.php');
if(isset($_REQUEST['section1'])) {
    if(file_exists('controller-xhr/user/'.$_REQUEST['section1'].'.php')) {
        include_once('controller-xhr/user/'.$_REQUEST['section1'].'.php');
    } else {
        ProcessError();
    }
} else {
    ProcessError();
}