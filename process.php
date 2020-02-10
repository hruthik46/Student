<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $city = $_POST['city'];
     $email = $_POST['email'];
     $roll_no = $_POST['roll_no'];
	 $sql = "INSERT INTO employee (name,city,email,roll_no)
	 VALUES ('$name','$city','$email','$roll_no')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>