<?php
session_start();
// get the value from form in login.php file
    $username =$_POST['username'];
    $password =$_POST['password'];
    
// to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    
    $con=mysqli_connect("localhost","root","");
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);
    
    

//connect to server and select database  
   mysqli_connect("localhost","root","");
   mysqli_select_db($con,"test");

// query the database for user
    $result=mysqli_query($con,"select * from  admin_detail where username ='$username'  and password='$password'")
                  or die("failed to query database".mysqli_error($con));
    $row = mysqli_fetch_array($result);
   
   if($row['username']==$username && $row['password']==$password) {
       session_start();
       $_SESSION['username']=$username;
       header ('location:viewdetail.php');
       }
            
 else
 {
    
    header ('location:index1.php'); 
 }