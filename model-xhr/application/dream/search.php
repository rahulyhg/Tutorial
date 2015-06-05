<?php

require_once('model/application-functions.php');

$dream = array();
if(isset($_REQUEST['dream_name'])) {
    $dream = GetDreamNameAndDescription($bdd, $_REQUEST['dream_name']);
}

header('Content-Type: application/json');
echo json_encode($dream);