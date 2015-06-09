<?php
//Connecting to sql db.
date_default_timezone_set('America/New_York');
$connect = mysqli_connect("localhost",$_POST['dbuser'],$_POST['dbpass'],"maint");
//Sending form data to sql db.
$date = strtotime($_POST['DateField']);
echo $date;
$query = sprintf("INSERT INTO pending (DateField, Issue, Time, CN, ProductLine, Status) 
	VALUES ('%s', '%s', '%s', '%s', '%s','%s')",
		$date,
    		$_POST['Issue'],
		$_POST['Time'],
		$_POST['Equipment'],
		$_POST['ProductLine'],
		'Pending');
echo $query;
mysqli_query($connect, $query);

?>
