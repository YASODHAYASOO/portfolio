<?php
$conn= new mysqli("localhost","root","","portfolio");
// if($conn->connect_error){
//     echo"failed to connect";
// }
// else{
//     echo("Connected with DB");
//     echo "<br>";
//   }
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Mobile = $_POST['mno'];
  $Message = $_POST['message'];
  $table="INSERT INTO details(Name,Email,Mobile,Message)VALUES('$Name','$Email','$Mobile','$Message');";
if($conn->query($table)===TRUE)
{
    echo("Message send successfully!!");
}
else{
    echo ("Failed to send");
}
?>