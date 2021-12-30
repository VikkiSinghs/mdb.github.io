<?php
$server='localhost';
$user='root';
$password='';
$db='test2';
$con = mysqli_connect($server, $user, $password, $db);

if(!$con){
  die("Connection failed: " . mysqli_connect_error());
}

else{
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $email=$_POST['email'];
    $msg=$_POST['msg'];

    $sql = "INSERT INTO form1 (email, msg)
    VALUES ('$email','$msg')";
    
    if (mysqli_query($con, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
   }
 }
?>
