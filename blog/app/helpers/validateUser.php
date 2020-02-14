<?php 

function validateUser($user) {

    $errors = array();

if(empty($user['username'])) {
    array_push($errors, "Username is Required");
}

if(empty($user['email'])) {
    array_push($errors, "Email is Required");
}

if(empty($user['password'])) {
    array_push($errors, "Password is Required");
}

if(($user['passwordConf'])!== $user['password']) {
    array_push($errors, "The two passwords do not match!");
}

    $existingUsers = selectOne('users',['email' => $user['email']]);
    if(isset($existingUsers)) {
    array_push($errors, "Email Already Exists");
    }

    return $errors;
}

function validateLogin($user) {

    $errors = array();

if(empty($user['username'])) {
    array_push($errors, "Username is Required");
}

if(empty($user['password'])) {
    array_push($errors, "Password is Required");
}

    return $errors;
}
















?>