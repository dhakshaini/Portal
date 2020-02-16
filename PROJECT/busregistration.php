<?php
$servername="localhost";
$username="pma";
$password="";
$dbname="ticket_booking";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:".$conn->connection_error);
}
$bus_no=$_POST['bus_no'];
$type=$_POST['type'];
$fare=$_POST['fare'];
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$sql="INSERT INTO busdetails(bus_no,type,fare,departure,arrival,source,destination) values('$bus_no','$type','$fare','$departure','$arrival','$source','$destination')";
if($conn->query($sql)===TRUE){
  echo"YOUR BUS REGISTRATION IS DONE SUCCESSFULLY"." ";
      echo'<script>
              alert("Registered successfully!!..Hurrah!!! we got a new bus!!!");
              window.open("main.html", "_self");
          </script>';
 }
else
{
   echo"Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>