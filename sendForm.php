<?php
//Connecting to sql db.
$connect = mysqli_connect(   );
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO pending (DateField, Issue, Time, Equipment, ProductLine) 
	VALUES ('$_POST[DateField]', '$_POST[Issue]', '$_POST[Time]', '$_POST[Equipment]', '$_POST[ProductLine]')");
?>