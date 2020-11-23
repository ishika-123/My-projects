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

.bg {
  /* The image used */
  background-image: url("payrollimg.jpg");

  /* Full height */
  height: 100%;  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* end */

/* pop up*/
body {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
/* end */
</style>
    <title>Payroll</title>
  </head>
  <body>
<div class="bg"></div> <! image >
<button class="open-button" onclick="openForm()">Login</button> <! pop up form >
<div class="form-popup" id="myForm">
  <form method="POST" action="#" class="form-container">
    <h1>Login</h1>

    <label for="text"><b>User Id</b></label>
    <input type="text" placeholder="Enter Id" name="userid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
    <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
  </form> <!end >
</div>



    <!-- Optional JavaScript -->
	<script language="javascript"> //pop up 
	function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<?php
/*//$userid = filter_input(INPUT_POST, 'userid');
//$password = filter_input(INPUT_POST, 'password');

// Create connection
$conn = new mysqli ("localhost", "root", "", "payroll");
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
if(isset($_POST["userid"], $_POST["password"])) 
        {     

            $userid = $_POST["userid"]; 
            $password = $_POST["password"]; 

            $result1 = mysqli_query($conn,"SELECT * FROM payroll.login WHERE payroll.userid = '".$userid."' and payroll.password= '".$password."'");
            //$result2 = mysql_query("SELECT password FROM payroll.login WHERE password = '".$password."'");
			
			if(mysqli_num_rows($result1)==1){
				echo "You have successfully logged in";
				exit();
			}
			else{
				echo "Username incorrect";
				exit();
			}
			
			
            /*if($userid == $result1 && $password == $result2) 
            { 
                $_SESSION["logged_in"] = true; 
                $_SESSION["naam"] = $userid; 
				header("Location: link.html");
				exit();
            }
            else
            {
                echo'The username or password are incorrect!';
				exit();
            }*/
  /*  } 
}

*/



//login table already created in the database
$host="localhost";
$user="root";
$password="";
$db="payroll";

$con=mysqli_connect("localhost","root",""); //procedural mysqli .here can also give mysqli_connect($host,$user,$password,$db)
mysqli_select_db($con,$db);//then this not required

if(isset($_POST['userid'])){//isset checks if variable is set i.e declared and not null
	$uname=$_POST['userid'];//post used to pass variables .to collect data submitted by html form using "post" method
	$password=$_POST['password'];

	$sql = "select * from payroll.login where userid='".$uname."' AND password='".$password."' limit 1";

	$result=mysqli_query($con,$sql);//to perform query "$sql" against db using conn

	if (mysqli_num_rows($result)==1) {//no. of rows in $result set
		echo "You have successfully logged in";
		header("Location: link.php");
		exit();	
	}
	else{
		echo "Username or password not found";
		exit();
	}
}
	







?>