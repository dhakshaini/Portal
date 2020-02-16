<!DOCTYPE HTML>
<?php
   //$_SESSION['busno'] = $var_value;
   
   //$var_value = $_SESSION['varname'];

  $con = mysqli_connect("localhost","pma","","ticket_booking");
  if (mysqli_connect_errno()){
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
  }
   ?>
  <html>
<head>  
<title>BOOKING</title>
</head>
<body>
<form action="server.php" method="post" name="form11">
<body style="background-color:Purple;">
<font color="White">
<h1 style="background-color:Plum;"><B>SSS TICKET BOOKING<B></h1>
<h3 style="background-color:Plum;"><I>!!!!CONFIRM YOUR TICKETS!!!<I></h3>
</font>
<br><br>
		<div>
			<p class="spacer"></p>
		</div>
<p style="color:White">BUSNO</p>
<input type="text" name="bus_no" value=<?php echo $_GET['bus_no']; ?> readonly/><br>
		<div
			<p class="spacer"></p>
		</div>
<p style="color:White">DATE</p>
<input type="date" name="date"><br>
		<div>
			<p class="spacer"></p>
		</div>
<p style="color:White">NO OF SEATS </p>
<input type="number" name="seats"><br>
		<div>
			<p class="spacer"></p>
		</div>
<p style="color:White">EMAIL</p>
<input type="text" name="email"><br>
		<div>
			<p class="spacer"></p>
		</div>
<br><p style="color:White"><input type="submit" name="confirm" value="confirm"><br>
</p></body><?php
    $bus_no=$_POST['bus_no'];
	$date=$_POST['date'];
	$seats=$_POST['seats'];
	$email=$_POST['email'];
	if(empty($_SESSION)) 
     session_start();	
    $result = mysqli_query($con,"SELECT * FROM busdetails WHERE bus_no='$bus_no' ");
	$check_user=mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if($check_user>0){
        $fare=$row['fare'];
		$type=$row['type'];
		$source=$row['source'];
		$destination=$row['destination'];
		$arrival=$row['arrival'];
		$departure=$row['departure'];
		$amount=$fare*$seats;
		$result1=mysqli_query($con,"insert into booking(bus_no,source,destination,date,seats,amount,email,arrival,departure) values('$bus_no','$source','$destination','$date','$seats','$amount','$email','$arrival','$departure')"); 
		  echo '<script>
		  alert("There your booking is confirmed...");
	      window.open("server1.php", "_self");   
           </script>';	
	}
?>