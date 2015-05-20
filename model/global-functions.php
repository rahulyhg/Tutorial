<?php

function ProcessError(){
    $url = ROOT_HOST.'not-found';
    header( "Location: $url" );
}