<?php
session_start();
if(isset($_SESSION['login'])){
}
    else{
        header("location:login.php");
        
    }
    
?>

         
<!DOCTYPE html>
<html lang="en">

                    <form method="post" action="act_ins.php">
						  <label>NAME:</label><br/><br/>
						  <input type="text" name="name"  required >
  
						  <label>EMAIL:</label><br/><br/>
						  <input type="email" name="email" required>

  <label>CONTACT:</label><br/><br/>
  <input type="number" name="contact" pattern="^\d{10}$" required="Enter 10 digit number">

 <label>GENDER:</label><br/><br/>
  <input type="radio" name="gender" value="male" checked>male<br/>
  <input type="radio" name="gender" value="female">female<br/>
  <input type="radio" name="gender" value="other">other<br/>
    
                                                         
                         <label>Skills:</label><br/><br/>
						<select name="skills">
						<option value="Php">Php</option>
						<option value="java">java</option>
						<option value="net">.net</option>
    
  </select>
  <label>Description:</label><br/><br/>
  <textarea name="description" rows="5" cols="40"></textarea>
  <label>User Name:</label><br/><br/>
  <input type="text" name="username" >
  <label>Password:</label><br/><br/>
  <input  placeholder="Password" name="password" type="password" value="">
                            <input type="SUBMIT" name="submit" class="btn btn-default">
							
                                        
                            </form>
                                        
                         