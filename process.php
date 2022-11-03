<?php
// get the value from form in login.php file
    $Name =$_POST['Name'];
    $RollNo =$_POST['RollNo'];
    $Department =$_POST['Department'];
    $BookName =$_POST['BookName'];
    $InitialDate =$_POST['InitialDate'];
    $renewalDate =$_POST['renewalDate'];
    
// to prevent mysql injection
   $Name = stripcslashes($Name);
   $RollNo = stripcslashes($RollNo);
   $Department = stripcslashes($Department);
   $BookName = stripcslashes ($BookName);
   $Year = stripcslashes($Year);
   $InitialDate = stripcslashes($InitialDate);
   $renewalDate = stripcslashes( $renewalDate);
     $link=mysqli_connect("localhost","root","");
            if($link==false){
                die("error: could not connect.".
                   mysqli_connect_error());
            }
//connect to server and select database
mysqli_connect("localhost","root","");
  mysqli_select_db($link,"test");

   
  $Name= mysqli_real_escape_string($link,$_REQUEST['Name']);
  $RollNo = mysqli_real_escape_string($link,$_REQUEST['RollNo']);
  $Department = mysqli_real_escape_string($link,$_REQUEST['Department']);
  $BookName = mysqli_real_escape_string($link,$_REQUEST['BookName']);
  $InitialDate= mysqli_real_escape_string($link,$_REQUEST['InitialDate']);
  $renewalDate= mysqli_real_escape_string($link,$_REQUEST['renewalDate']);
  $Status="Not Submited";
$sql="INSERT INTO std_details(Name,RollNo,Department,BookName,InitialDate,renewalDate,Status)
VALUES('$Name','$RollNo','$Department','$BookName','$InitialDate','$renewaldate','$Status')";
if(mysqli_query($link,$sql)){
    header('location:student-dtails.php');
    
}else{
    echo "ERROR: Could not able to execute $sql.".
mysqli_error($link);
}
mysqli_close($link);

?>