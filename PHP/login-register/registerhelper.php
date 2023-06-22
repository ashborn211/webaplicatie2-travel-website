<?php
include_once('../dbconnect.php');
var_dump($_POST);
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['emailadress'])){
        var_dump($_POST);
        if($_POST['username'] == ""){
            echo 'username can\'t be empty <br>';
           }
        if($_POST['password'] == ""){
            echo 'password can\'t be empty <br>';
            }
        if($_POST['emailadress'] == ""){
            echo 'emailadress can\'t be empty <br>';
        }
    }   
?>