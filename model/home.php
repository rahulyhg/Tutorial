<?php

        require_once('model/sign-functions.php');
        require_once('model/user-functions.php');
        $allSigns = GetSignList($bdd);
        $Content = parse_ini_file('language/content.ini');
        $signWithHoroscope = array();
        $i = 0;
        foreach($allSigns as $sign){
            $signWithHoroscope[$i] = GetSignHoroscopeForToday($bdd,$sign['sign_name']);
            $i++;
        }