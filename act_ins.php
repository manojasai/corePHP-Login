<?php
include_once 'db.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender	=$_POST['gender'];
    $skills	=$_POST['skills'];
    $description=$_POST['description'];
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    $mysqli->query("INSERT INTO `register` (`id`, `name`, `email`, `contact`, `gender`, `skills`, `description`,`username`,`password`) VALUES (NULL, '$name', '$email', '$contact', '$gender','$skills', '$description','$username','$password')");
  
}
       header("location:login.php");
?>






