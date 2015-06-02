<?php


    require_once('model/sign-functions.php');
    require_once('model/user-functions.php');
    require_once('model/application-functions.php');
    $allSigns = GetSignList($bdd);
    $Content = parse_ini_file('language/content.ini');

    if(isset($_REQUEST['section3'])) {
        $dreamsStartWith = GetDreamsStartWithLetter($bdd, $_REQUEST['section3']);
    }
    else{
        $dreamsStartWith = GetDreamsStartWithLetter($bdd, 'a');
    }