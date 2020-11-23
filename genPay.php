<?php

	/*session_start();
	if (!isset($_SESSION['loggedin'])) {
		header('Location:login.php');
		exit();
	}
	*/
	
	$emp_no=filter_input(INPUT_POST, 'emp_no');
	
	
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'payroll';
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	
	if (mysqli_connect_errno()) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
	}
	if(isset($_POST['emp_no'])){
	
		$sql1="select * from salary where emp_no='$emp_no'";
		$result=mysqli_query($con,$sql1);
		if (mysqli_num_rows($result)==1)
		{
				$sql="select salary.emp_no,salary.emp_name,salary.basic_sal,salary.DA,salary.HRA,salary.bus,salary.security,salary.tax, salary.net from salary where salary.emp_no='$emp_no'";
				$result = mysqli_query($con, $sql);
				
					echo "<center><table height=50 width=30 border=1px solid black border-collapse:collapse>
						<tr>
						<th>Employee ID</th>
						<th>Employee name</th>
						<th>Basic salary</th>
						<th>DA</th>
						<th>HRA</th>
						<th>Bus</th>
						<th>Security</th>
						<th>Tax</th>
						<th>Net</th></tr>";
				
						$row = mysqli_fetch_assoc($result);
						echo '<tr><td>'.$row["emp_no"].'</td>
						<td>'.$row["emp_name"].'</td>
						<td>'.$row["basic_sal"].'</td>
						<td>'.$row["DA"].'</td>
						<td>'.$row["HRA"].'</td>
						<td>'.$row["bus"].'</td>
						<td>'.$row["security"].'</td>
						<td>'.$row["tax"].'</td>
						<td>'.$row["net"].'</td>
						</tr></center>
						<a href="link.php"><font color="blue" size=5>Home</font></a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						
						';
					
					echo "</table>";
					
			
	}
	else{
		echo "no results";
	
}
}

?>