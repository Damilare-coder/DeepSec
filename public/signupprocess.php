<?php
session_start();
require 'connection.php';


if (isset($_POST['submit'])) {
    // Collecting the data from the form
    // Using the POST method to collect data
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

// echo $email;



if(empty($_POST['first_name'])||empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password'])){

    $_SESSION['log'] = 'All fields are required';
    header('Location:signup.php');
    exit;

} else{

    
}
















}
































?>