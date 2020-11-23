 <a href="link.php">Home</a>
 <?php

$conn = new mysqli ("localhost","root","","payroll");

if(mysqli_connect_error()){//returns error description from the conn .returns null if no error
	die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	
} 


$sql = 'CALL CONSAL()';
$result = $conn->query($sql);

if (mysqli_num_rows($result)>0 ) {
					echo "<br><br><br><br><br><br><br><br><br>
					<center><table height=500px width=600px border=1px solid black border-collapse:collapse>
						<tr>
						<th>Image</th>
						<th>Employee ID</th>
						<th>Employee Name</th>
						<th>Basic salary</th>
						<th>DA</th>
						<th>HRA</th>
						<th>Bus</th>
						<th>Security</th>
						<th>Tax</th>
						<th>Net</th></tr>";
				$i=1;
				while($row = mysqli_fetch_assoc($result)) {//mysqli_fetch_assoc will fetch result row as an associative array of strings representing fetched row.returns NULL if no more rows in result
					echo 
						'<tr>
						 <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="300" class="img-thumnail" />  
                               </td> <td>'.$row["emp_no"].'</td> 
							   <td>'.$row["emp_name"].'</td>
						<td>'.$row["basic_sal"].'</td>
						<td>'.$row["DA"].'</td>
						<td>'.$row["HRA"].'</td>
						<td>'.$row["bus"].'</td>
						<td>'.$row["security"].'</td>
						<td>'.$row["tax"].'</td>
						<td>'.$row["net"].'</td>
						</tr></center>
						
						';
						$i=$i+1;
				}
					echo "</table>";
					
			} 
			else {
				echo "no results";
			}
$conn->close();



?>
</br>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
	
	/*Background image*/
	body, html {
  height: 100%;
  margin: 0;
}
</style>
    <title>Consolidated Salary</title>
  </head>
  <body>
<div class="bg"></div> <! image >

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

