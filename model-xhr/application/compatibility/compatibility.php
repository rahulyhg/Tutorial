<?php

    require_once('model/user-functions.php');
    require_once('model/sign-functions.php');

    $Content = parse_ini_file('language/content.ini');
    $allSigns = GetSignList($bdd);