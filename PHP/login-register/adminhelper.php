<?php
include_once('../dbconnect.php');
var_dump($_POST);
if (isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] == true) {
    header("Location: ../adminlogin/create.php");
}    
$data = $connect->query("SELECT * FROM adminaccount")->fetchAll(); 

foreach ($data as $row){
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['emailadress'])){
        if($_POST['username'] == $row['username'] && $_POST['emailadress'] == $row['emailadress'] && $_POST['password'] == $row['password']){

            $_SESSION['LOGGED_IN'] = true;
            $_SESSION['username'] = $row['username'];
            header("Location: ../adminlogin/create.php");
        }
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
    }
}   
?>