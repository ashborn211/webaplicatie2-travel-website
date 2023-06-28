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
                echo "email can't be empty <br>";
            }
            if($_POST['password'] == ""){
                echo "email can't be empty <br>";
            }
            if($_POST['emailadress'] == "admin@gmail.com" && $_POST['password'] == "12345"){
                echo 'hello admin';

                header("Location: ../adminlogin/create.php");
            }
        }

    }
    }
    ?>