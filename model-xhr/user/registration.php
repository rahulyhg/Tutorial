<?php
require_once('model/user-functions.php');
$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

if (empty($_POST['email']))
    $errors['email'] = 'Email is required.';

if(empty($_POST['password'])){
    $errors['password'] = 'Password is required';
}

if(empty($_POST['password-confirm'])){
    $errors['password-confirm'] = 'Confirm password is required';
}

if(!empty($_POST['password']) && !empty($_POST['confirm-password'])){
    if($_POST['password'] != $_POST['confirm-password']){
        $errors['password'] = 'Please check your password';
    }
}

// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {
    if(!ExistUser($bdd, $_POST['email'])){
        $_SESSION['user_id'] = InsertNewUser($bdd, $_POST['email'], $_POST['password']);
        $newURL = ROOT_HOST.'home';
        $data['success'] = true;
        $data['message'] = 'Success!';
        $data['url'] = $newURL;
    }
    else{
        $errors['user_exist'] = 'This email is already registered';
        $data['errors']  = $errors;
    }
}

header('Content-Type: application/json');
echo json_encode($data);

