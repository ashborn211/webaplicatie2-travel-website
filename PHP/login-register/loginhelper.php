<?php
include_once('../dbconnect.php');
var_dump($_POST);


$sql = "SELECT username, password, emailadress FROM users ORDER BY id ASC";
$stmt = $connect->prepare($sql);
$stmt -> FetchAll(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt ->FetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['username']) && isset($_POST['password']) && $_POST(["emailadress"])){
    if($_POST["username"] == '' && 
    $_POST["password"] == '' && 
    $_POST["emailadress"]){
        echo 'successfuly logged in';
        echo 'welcome';
    } else{
        if(isset($_POST['username']) && isset($_POST['password']) && $_POST(["emailadress"])){
            var_dump($_POST);
            if($_POST['username'] == ""){
                echo 'email can\'t be empty <br>';
            }
            if($_POST['password'] == ""){
                echo 'password can\'t be empty <br>';
            }
            if($_POST['emailadress'] == ""){
                echo 'password can\'t be empty <br>';
            }
        }
       
    }
    }
    ?>