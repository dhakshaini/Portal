<?php 
 $con = mysqli_connect("localhost","pma","","ticket_booking");
  if (mysqli_connect_errno()){
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
  } ?>
  <head>  
<title>REGISTRATION</title>
</head>
<body style="background-color:Purple;">
<font color="White">
<h1 style="background-color:Plum;"><B>SSS TICKET BOOKING<B></h1>
<h3 style="background-color:Plum;"><I>!!!!HERE IS THE KEY FOR YOUR WONDERFUL JOURNEY!!!<I></h3>
<img src="IMAGES\ticket.jpg" style="width:600px;height:300px;">
</font>
</body>
</head><?php  
$email=$_POST['email'];
$password=$_POST['password'];
$result = mysqli_query($con,"SELECT * FROM booking WHERE email='$email' ");
	$check_user=mysqli_num_rows($result);
       $row = mysqli_fetch_assoc($result);
    if($check_user>0){
        $ticket_id=$row['ticket_id'];
		$bus_no=$row['bus_no'];
		$source=$row['source'];
		$destination=$row['destination'];
		$date=$row['date'];
		$seats=$row['seats'];
	    $amount=$row['amount'];
		$arrival=$row['arrival'];
		$departure=$row['departure'];
	?><p style="color:White">
	<br>TICKET ID:<br><?php echo $ticket_id; ?><br>
	<br>BUSNO :<br><?php echo $bus_no ?><br>
	<br>FROM :<br><?php echo $source; ?><br>
	<br>TO:	<br><?php echo $destination; ?><br>
	<br>AMOUNT:<br><?php echo $amount;?><br>
	<br>DEPARTURE:<br><?php echo $departure; ?><br>
	<br>ARRIVAL: <br><?php echo $arrival; ?><br>
	<br><br>
	<?php echo"YOU HAVE TO PAY THE AMOUNT AT THE TIME OF TRAVEL!!
	HAPPY JOURNEY !!!";
	?></p><a href='profile.html'><p style="color:White">BACK</p></a><br>
	<?php }
	?>