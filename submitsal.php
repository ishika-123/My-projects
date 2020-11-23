
<?php
	
$emp_no=filter_input(INPUT_POST, 'emp_no');
$basic_sal=filter_input(INPUT_POST, 'basic_sal');
$DA=filter_input(INPUT_POST, 'DA');
$HRA=filter_input(INPUT_POST, 'HRA');
$bus=filter_input(INPUT_POST, 'bus');
$security=filter_input(INPUT_POST, 'security');
$tax=filter_input(INPUT_POST, 'tax');
//$net=filter_input(INPUT_POST, 'net');

$conn = new mysqli ("localhost","root","","payroll");

if(mysqli_connect_error()){
	die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	
} 

else{
	$sql="INSERT INTO salary(emp_no,basic_sal,DA,HRA,bus,security,tax) values ('$emp_no','$basic_sal','$DA','$HRA','$bus','$security','$tax')";
	if(mysqli_multi_query($conn, $sql)){
		echo "new record is inserted successfully";
		header("Location: link.php");
	}
	else{
		echo "error: ". $sql ."
		". $conn->error;
	}
	$conn->close();
}

?> 