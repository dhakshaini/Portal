<?php 
 $con = mysqli_connect("localhost","pma","","ticket_booking");
  if (mysqli_connect_errno()){
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
  }?>
<head> 
<title>BOOKING</title>
</head>
<body>
<form action="print.php" method="post" name="form19">
<body style="background-color:Purple;">
<font color="White">
<h1 style="background-color:Plum;"><B>SSS TICKET BOOKING<B></h1>
<h3 style="background-color:Plum;"><I>!!!!PRINT YOUR TICKETS!!!<I></h3>
</font>
<br><br>
</div>
			<div>
			<p class="spacer"></p>
		</div>
<p style="color:White">EMAIL</p>
<input type="text" name="email"><br>
			<div>
			<p class="spacer"></p>
		</div>
<p style="color:White">PASSWORD</p>
<input type="password" name="password"><br>
			<div>
			<p class="spacer"></p>
		</div>
<br><p style="color:White"><input type="submit" name="print" value="PRINT"></p><br>
</form>
</body>