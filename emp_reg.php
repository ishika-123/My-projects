
<?php

$emp_no=filter_input(INPUT_POST, 'emp_no');//filter input will fetch external variable like from form input and optionally filter it.validates variales from insecure resources like user i/p from form. 'empno' is variable which has to be checked. INPUT_POST is method which will check i/p
$emp_name=filter_input(INPUT_POST, 'emp_name');
$age=filter_input(INPUT_POST, 'age');
$gender=filter_input(INPUT_POST, 'gender');
$city=filter_input(INPUT_POST, 'city');
$address=filter_input(INPUT_POST, 'address');
$phone_no=filter_input(INPUT_POST, 'phone_no');
$dept_no=filter_input(INPUT_POST, 'dept_no');
$empr_id=filter_input(INPUT_POST, 'empr_id');
$doj=filter_input(INPUT_POST, 'doj');
$designation=filter_input(INPUT_POST, 'designation');


$conn = new mysqli ("localhost","root","","payroll");

if(mysqli_connect_error()){
	die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	
} 

else{
	$sql="INSERT INTO emp_detail(emp_no,emp_name,age,gender,city,address,phone_no) values ('$emp_no','$emp_name','$age','$gender','$city','$address','$phone_no')";
	$sql1="INSERT INTO emp_off(emp_no, dept_no, doj, designation,emp_name) values ('$emp_no', '$dept_no', '$doj', '$designation', '$emp_name')";
	if(mysqli_multi_query($conn, $sql) && mysqli_multi_query($conn, $sql1) ){
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