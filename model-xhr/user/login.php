<?php

require_once('model/user-functions.php');
$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

if (empty($_POST['email']))
    $errors['email'] = 'Email is required.';

if(empty($_POST['password'])){
    $errors['password'] = 'Password is required';
}

// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {
    // show a message of success and provide a true success variable
    $data['success'] = true;
    $data['message'] = 'Success!';
    if(ExistUser($bdd, $_POST['email'])) {
        $_SESSION['user_id'] = GetUserId($bdd, $_POST['email']);
        $data['url'] = ROOT_HOST . 'home';
    }
}
header('Content-Type: application/json');
echo json_encode($data);