<?php
include_once('../dbconnect.php');
var_dump($_POST);
if(isset($_POST['username']) && isset($_POST['password']) && $_POST(["emailadress"])){
    
    $sql = "SELECT username, password, emailadress FROM users ORDER BY id ASC";
    $stmt = $connect->prepare($sql);
    $stmt -> FetchAll(PDO::FETCH_ASSOC);
    $stmt->execute();
    $result = $stmt ->FetchAll(PDO::FETCH_ASSOC);

        $username = $_POST['username'];
        $password = $_POST['password'];
        $emailadress = $_POST['emailadress'];
    
        $sql = "SELECT username, password, emailadress FROM adminaccount";
        $stmt = $connect->prepare($sql);
        $stmt -> FetchAll(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt ->FetchAll(PDO::FETCH_ASSOC);

        $adminname = $_POST['username'];
        $adminpassword = $_POST['password'];
        $adminemailadress = $_POST['emailadress'];


    foreach($result as $data) {
        if($_POST["username"] == $username && $_POST["password"] == $password && $_POST["emailadress"] == $emailadress){
            echo 'successfuly logged in';
            echo 'welcome';

        }else if($_POST["username"] == $adminname && $_POST["password"] == $adminpassword && $_POST["emailadress"] == $adminemailadress){
            echo 'successfuly logged in';
            echo 'welcome admin';
            header("location: ../adminlogin/create.php");
        } 
        
        else{
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
    
    
    }
    ?>