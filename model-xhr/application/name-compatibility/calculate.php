<?php

require_once('model/application-functions.php');

$compatibility = array(
    1 => array(
        '0'=>'A',
        '1'=>'M',
        '2'=>'X'
    ),
    2 => array(
        '0' => 'E',
        '1' => 'L',
        '2' => 'T'
    ),
    3 => array(
        '0' => 'B',
        '1' => 'K',
        '2' => 'V'
    ),
    4 => array(
        '0' => 'C',
        '1' => 'P',
        '2' => 'Q'
    ),
    5 => array(
        '0' => 'F',
        '1' => 'N',
        '2' => 'U'
    ),
    6 => array(
        '0' => 'J',
        '1' => 'R',
        '2' => 'Z'
    ),
    7 => array(
        '0' => 'I',
        '1' => 'P',
        '2' => 'W'
    ),
    8 => array(
        '0' => 'G',
        '1' => 'O',
        '2' => 'Y'
    ),
    9 =>array(
        '0' => 'H',
        '1' => 'S'
    )

);

function CalculateMagicNumberCompatibility($name, $compatibility){
    $name_array = array();
    $i = 0;
    for($i = 0; $i < strlen($name); $i++){
        foreach($compatibility as $number){
            if(in_array($name[$i], $number)){
                $name_array[$i] = array_keys($compatibility, $number)[0];
            }
        }
    }
    return array_sum($name_array);
}

function CalculateSumForMagicNumber($number)
{
    $sum = 0;
    if($number > 9){
        do {
            $sum += $number % 10;
        }
        while ($number = (int) $number / 10);
    }
    return $sum;
}

$data = array();
if(empty($_REQUEST['user1']) || empty($_REQUEST['user2'])){
   $data['errors'] = 'Introsuceti ambele nume';
}
else{
    $compatibilitySum = 0;
    $data['success'] = true;
    $user1 = CalculateSumForMagicNumber(CalculateMagicNumberCompatibility(strtoupper($_POST['user1']), $compatibility));
    $user2 = CalculateSumForMagicNumber(CalculateMagicNumberCompatibility(strtoupper($_POST['user2']), $compatibility));
    $compatibilitySum = $user1 + $user2;

    if($compatibilitySum > 9){
        $data['compatibility'] = GetCompatibilityOnNames($bdd,CalculateSumForMagicNumber($compatibilitySum));
    }
    else{
        $data['compatibility'] = GetCompatibilityOnNames($bdd,$compatibilitySum);
    }

    header('Content-Type: application/json');
    echo json_encode($data);
}