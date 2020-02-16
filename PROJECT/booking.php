<?php
	$con = mysqli_connect("localhost","pma","","ticket_booking");
	if($con->connect_error){
		die("connection failed:".$conn->connection_error);
    }
	$from = $_POST['from'];
	$to = $_POST['to'];
	$result = mysqli_query($con, "SELECT * FROM busdetails WHERE source='$from' and destination='$to' ");
	$check_user=mysqli_num_rows($result);
	if ($check_user > 0) { ?>
	<body style="background-color:Purple;">
<font color="White">
<h1 style="background-color:Plum;"><B>SSS TICKET BOOKING<B></h1>
<h3 style="background-color:Plum;"><I>!!!!CHOOSE YOUR RIDE!!!<I></h3>
</font>
	<table>
	<thead><p style="color:White">
		<tr><p style="color:White">
			<th>Bus No</th>
			<th>Type</th>
			<th>Departure</th>
			<th>Arrival</th>
			<th>FARE</th></p>
		</tr>
	</thead>
	<?php
    // output data of each row
		while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><p style="color:White"><?php echo $row['bus_no']; ?></p></td>
			<td><p style="color:White"><?php echo $row['type']; ?></p></td>
			<td><p style="color:White"><?php echo $row['departure']; ?></p></td>
			<td><p style="color:White"><?php echo $row['arrival']; ?></p></td>
			<td><p style="color:White"><?php echo $row['fare'];?></p></td>
			      
			<td><a href='server.php?bus_no="<?php echo $row['bus_no']; ?>"'><p style="color:White">Book Ticket</p></a></td>
			<?php //$_SESSION['bus_no'] = $row['bus_no']; ?>

		</tr>
		<?php } ?>
		</table>
		<br><p style="color:White">NOTE THE BUS NO YOU WANT TO BOOK BECAUSE THERE IS A NEED TO ENTER THIS VALUE IN NEXT PAGE!!!!!<br>
	</p><?php }
	else {
		echo '<script>
             alert("There is no bus avaliable in the cities you needed ..!! 
			 sorry for the inconvinence... try with someother nearby cities");
             window.open("profile.html","_self");
            <script>' ;
		}
	mysqli_close($con);
?>