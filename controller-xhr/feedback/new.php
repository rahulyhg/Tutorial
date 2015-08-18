<?php
require_once('model/feedback-functions.php');

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

if (empty($_POST['email']))
    $errors['email'] = 'Email is required.';

if(empty($_POST['user-name'])){
    $errors['name'] = 'Name is required';
}

if(empty($_POST['content'])){
   $errors['content'] = "Content is required";
}

// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {
    if(strlen($_POST['user-name']) > 100 || strlen($_POST['email']) > 100 || strlen($_POST['content']) > 400){
        $data['errors'] = "Too much text";
    }
    else {
        $data['success'] = true;
        InsertFeedback($bdd, $_POST);
    }
}
header('Content-Type: application/json');
echo json_encode($data);