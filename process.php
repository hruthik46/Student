<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $city = $_POST['city'];
     $email = $_POST['email'];
	 $roll_no = $_POST['roll_no'];
	 $sem1_sgpa = $_POST['sem1_sgpa'];
	 $sem2_sgpa = $_POST['sem2_sgpa'];
	 $sem3_sgpa = $_POST['sem3_sgpa'];
	 $sem4_sgpa = $_POST['sem4_sgpa'];
	 $sem5_sgpa = $_POST['sem5_sgpa'];
	 $sem6_sgpa = $_POST['sem6_sgpa'];
	 $sem8_sgpa = $_POST['sem8_sgpa'];
	 $mentor_name = $_POST['mentor_name'];
	 $sem7_sgpa = $_POST['sem7_sgpa'];
	 $sql = "INSERT INTO employee (name,city,email,roll_no,sem1_sgpa,sem2_sgpa,sem3_sgpa,sem4_sgpa,sem5_sgpa,sem6_sgpa,sem8_sgpa,mentor_name,sem7_sgpa)
	 VALUES ('$name','$city','$email','$roll_no','$sem1_sgpa','$sem2_sgpa','$sem3_sgpa','$sem4_sgpa','$sem5_sgpa','$sem6_sgpa','$sem8_sgpa','$mentor_name','$sem7_sgpa')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>