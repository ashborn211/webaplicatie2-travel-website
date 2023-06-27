<?php
include_once('../dbconnect.php');
var_dump($_POST);
if(isset($_POST["email"]) && isset($_POST["password"])){
    if($_POST["email"] == 'velican@gmail.com' && 
    $_POST["password"] == 'velican'){
        echo 'success';
    } else{
        if(isset($_POST['email']) && isset($_POST['password'])){
            var_dump($_POST);
            if($_POST['email'] == ""){
                echo 'email can\'t be empty <br>';
            }
            if($_POST['password'] == ""){
                echo 'password can\'t be empty <br>';
            }
            if($_POST['email'] == "admin@gmail.com" && $_POST['password'] == "12345"){
                echo 'hello admin';
                
                header("Location: http://localhost/webaplicatie2-travel/webaplicatie2-travel-website/PHP/adminlogin/create.php");
            }
        }
       
    }
    }
    ?>