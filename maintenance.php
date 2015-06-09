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
			date_default_timezone_set('America/New_York');
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "maint";
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
		<form id="Form1" action="sendForm.php" method="POST">
		<td><input type="hidden" name="dbuser" value="<?php echo $username?>"></td>      	
		<td><input type="hidden" name="dbpass" value="<?php echo $password?>"></td>		  
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
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "maint"; 
			// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = mysqli_query($conn,"SELECT * FROM pending");
		#echo "Connected Successfully";
		#echo $sql->num_rows
		
		?>
		<a href='file:///R:/Operation%20Instruction%20Procedures%20-%20OIP/'>Here</a>	
		<!-- Display -->
		<table>
			<tr>
				
				<th>Date</th>
				<th>C/N</th>
				<th>Issue</th>
				<th>Time</th>
				<th>Status</th>
			</tr>
			<!-- get the data -->
			<?php
			
				if (!$sql) {
					
    					printf("Error: %s\n", mysqli_error($conn));
   					 exit();
				}
				
				while($row = mysqli_fetch_array($sql)) {
		            ?>
      <tr class="visible"><!-- Visible Row -->
          
          <td><?php echo date('m/d/Y', $row['DateField']) ?></td>
          <td><?php echo $row['CN']?></td>
          <td><?php echo $row['Issue']?></td>
          <td><?php echo $row['Time']?></td>
          <td><?php echo $row['Status']?></td>
          <td><a href="#" onclick="$(".invisible").toggle();">Update</td>
      </tr>
      
    	
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
