<?php
    /*
    $address = '192.227.242.184';
    $username = 'admin';
    $password = 'SP5WF43PFQf9tAJ';
    $database = 'never-give-up';
    */
    if(ROOT_HOST != '/'){
        $address = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'zodiacool';
    }


    global $bdd;

    if(!isset($bdd))
    {
        try{
            $bdd = new PDO('mysql:host='.$address.';dbname='.$database.'',$username,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        catch(Exception $e)
        {
            die('Error : '.$e->getMessage());
        }
    }