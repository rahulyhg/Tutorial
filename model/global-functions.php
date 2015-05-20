<?php

function ProcessError(){
    $url = ROOT_HOST.'not-found';
    header( "Location: $url" );
}

function GetMonth($month){
    $current = '';
    switch($month){
        case '01': $current = 'Ianuarie';
            break;
        case '02': $current = 'Februarie';
            break;
        case '03': $current = 'Martie';
            break;
        case '04': $current = 'Aprilie';
            break;
        case '05': $current = 'Mai';
            break;
        case '06': $current = 'Iunie';
            break;
        case '07': $current = 'Iulie';
            break;
        case '08': $current = 'August';
            break;
        case '09': $current = 'Septembrie';
            break;
        case '10': $current = 'Octombrie';
            break;
        case '11': $current = 'Noiembrie';
            break;
        case '12':$current = 'Decembrie';
            break;
        default: $current = '';
    }
    return $current;
}