<?php
require_once('model/sign-functions.php');
$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

if (empty($_POST['sign1']))
    $errors['sign1'] = 'Sign is required.';

if(empty($_POST['sign2'])){
    $errors['sign2'] = 'Sign is required';
}

// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {
    if(ExistSignId($bdd, $_POST['sign1']) && ExistSignId($bdd, $_POST['sign2'])){
        if(empty(GetCompatibilityDescription($bdd, $_POST['sign1'], $_POST['sign2']))){
            $data['decription'] = GetCompatibilityDescription($bdd, $_POST['sign2'], $_POST['sign1']);
        }
        else{
            $data['description'] = GetCompatibilityDescription($bdd, $_POST['sign1'], $_POST['sign2']);
        }
    }
}

header('Content-Type: application/json');
echo json_encode($data);

