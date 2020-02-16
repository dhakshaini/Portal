<?php
$servername="localhost";
$username="pma";
$password="";
$dbname="ticket_booking";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:".$conn->connection_error);
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO customer_details(name,age,gender,phno,email,password) values('$name','$age','$gender','$phno','$email','$password')";
if($conn->query($sql)===TRUE){
      echo'<script>
              alert("signed up successfully!!");
              window.open("login.html", "_self");
          </script>';
 }
else
{
   echo"Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>