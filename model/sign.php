<?php
    require_once('model/sign-functions.php');
    require_once('model/user-functions.php');
    $Content = parse_ini_file('language/content.ini');
    $allSigns = GetSignList($bdd);
    $i = 0;
    $signData = GetSignHoroscopeForToday($bdd,$_REQUEST['section1'])[0];
    $signDataTomorrow = GetSignHoroscopeForTomorrow($bdd, $_REQUEST['section1'])[0];

