<?php
session_start();
include '../Database/env.php';

$title = $_REQUEST['title'];
$name = $_REQUEST['name'];
$details = $_REQUEST['details'];
$error = [];

//TITLE VALIDATION
if(empty($title)){
    $error['title_error'] = 'Enter Your title';
}elseif (strlen($title)>20){
    $error['title_error'] = 'title must be 10 charectur';
}
//NAME VALIDATION
if(empty($name)){
    $error['name_error'] = 'Enter Your Name';
}
//DETAILS VALIDATON
if(empty($details)){
    $error['detail_error'] = "Enter your details";
}


if(count($error) > 0){
    $_SESSION['fromControl'] = $error;
    header('location:../index.php');
}else{
    $query = "INSERT INTO post(title, name, detail) VALUES ('$title','$name ','$details')";
    $compleat = mysqli_query($conn,$query);
}
if($compleat){
    header("location:../index.php");
}


