
<html>
	<head>
		<script src="jquery-1.11.3.min.js"></script>
		<script src="toggle.js"></script>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>
			Alex's Project
		</title>
	</head>
	<body>
		<!--Testing SQLite DB-->
		<?php
			$servername = 
			$username = 
			$password = 
			$dbname = 

				// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected Successfully";

		$conn->close();

		?>
		<!--Form to enter new data -->
		<form id="Form1" action="sendForm.php" method="post">
		  Date: <input type="text" name="DateField"><br>
		  Issue: <input type="text" name="Issue"><br>
		  Time: <input type="text" name="Time"><br>
		  Equipment: <input type="text" name="Equipment"><br>
		  Product Line: <input type="text" name="ProductLine"><br>

		  <input type="hidden" name="SubmitCheck" value="sent">
		  <input type="Submit" name="Form1_Submit" value="New Record">
		</form>
		<!-- This fetches the data you already have -->
		<?php
		$servername = 
		$username = 
		$password = 
		$dbname = 

			// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = mysqli_query($conn,"SELECT * FROM pending");
		echo "Connected Successfully";
		?>
		<!-- Display -->
		<table>
			<tr>
				<th>ID</th>
				<th>Date</th>
				<th>Equipment</th>
				<th>Issue</th>
				<th>Time</th>
			</tr>
			<!-- get the data -->
			<?php
				while($row = mysqli_fetch_array($sql)) {
		            ?>
      <tr class="visible"><!-- Visible Row -->
          <td><?php echo $row['ID']?></td>
          <td><?php echo $row['DateField']?></td>
          <td><?php echo $row['Equipment']?></td>
          <td><?php echo $row['Issue']?></td>
          <td><?php echo $row['Time']?></td>
          <td><a href="#" onclick="$(".invisible").toggle();">Update</td>
      </tr><!-- Visible Row -->
      <form id="Form2" method="post">
      <tr class="invisible"><!-- Invisible Row -->
      	<td><?php echo $row['ID']?></td>
      	<td><input type="text" name="DateField" value="<?php echo $row['DateField']?>"></td>
      	<td><input type="text" name="Equipment" value="<?php echo $row['Equipment']?>"></td>
      	<td><input type="text" name="Issue" value="<?php echo $row['Issue']?>"></td>
      	<td><input type="text" name="Time" value="<?php echo $row['Time']?>"></td>
      	<td><input type="Submit" name="Form1_Submit" value="New Record"></td>
      </tr><!-- Invisible Row -->
    	</form>
    <!-- Close the database -->
	  <?php
	  }
	  $conn->close();
	  ?>
		</table>
		
		<!-- Testing JQuery Slide Toggle -->
		<!--<div id="slide">
		    Slide content<br />
		    Slide content<br />
		    Slide content<br />
		    </div>
		<div id="content">
		    Content<br />
		    Content<br />
		    Content<br />
		</div>

		<button id="slide_button">Slide it</button>
		<div id="contact">
    Contact me!
		</div>
		<a href="#" id="toggle">Contact</a>

		<div class="container">
			<div class="dhead">
			</div>
			<div class="dbody">
			</div>
		</div>		
		-->
		<!-- Testing JQuery Slide Toggle -->
	</body>
</html>