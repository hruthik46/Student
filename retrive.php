<?php
include_once 'database.php';
//$sql = 
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="style.css">
 <title> Retrive data</title>
 </head>
<body>
  <table>
  
  <tr>
    <td>Name</td>
    <td>City</td>
    <td>Email id</td>
  </tr>
<?php
$i=0;
while($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 </body>
</html>