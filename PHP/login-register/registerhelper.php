<?php
include_once('../dbconnect.php');
var_dump($_POST);

$data = $connect->query("SELECT * FROM users")->fetchAll(); 

foreach ($data as $row){
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['emailadress'])){
 
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