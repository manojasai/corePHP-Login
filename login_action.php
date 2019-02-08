<?php
session_start();

include "db.php";
if(!empty($_POST["login-submit"])){
    $username=$_POST["username"];
    $password=md5($_POST['password']);
    $res= $mysqli->query("SELECT * FROM login WHERE username='$username' and password='$password'");
    
    $row=$res->fetch_assoc();
    if($res->num_rows > 0){
        $_SESSION['login']=$username; 
        $_SESSION['error']=""; 
		
        header("location:myaccount.php");
    }
    else{
	
	 $_SESSION['error']="Username or Password is invalid"; 
	
        header("location:index.php");
    }
}
?>
