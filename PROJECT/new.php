<?php
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$conn=new mysqli('localhost','root','saran','pet_booking');
if($conn->connect_error){
die('connection failed:'.$conn->connect_error);
}
if(empty($_SESSION))
	session_start();
if(isset($_POST['register'])){
	if(empty($mail)||empty($pass)){
    echo '<script>
    alert("Enter Valid Details");
    window.open("register.html","_self")
      </script>';
  }else{
  $stmt=$conn->prepare("insert into tab(email,pas) values('$mail','$pass')");
  $stmt->execute();
  echo'<script>
          alert("signed up successfully!!");
          window.open("login.html", "_self");
      </script>';
      $stmt->close();
    }
  }
else {
  echo '<script>
  alert("Enter Valid Details");
  window.open("register.html","_self")
    </script>';
}

?>