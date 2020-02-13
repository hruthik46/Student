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
    <td>Roll</td>
    <td>Sem1 Sgpa</td>
    <td>Sem2 Sgpa</td>
    <td>Sem3 Sgpa</td>
    <td>Sem4 Sgpa</td>
    <td>Sem5 Sgpa</td>
    <td>Sem6 Sgpa</td>
    <td>Sem7 Sgpa</td>
    <td>Sem8 Sgpa</td>
    <td>mentor name</td>
    <td>Cgpa</td>
    <td>sem completed</td>
  </tr>
<?php
$i=0;
while($row = $result->fetch_assoc()){
?>
<?php
$check = 0;
while(1)
{
  if($row["sem1_sgpa"]==0)break;
  $check++;
  if($row["sem2_sgpa"]==0)break;
  $check++;
  if($row["sem3_sgpa"]==0)break;
  $check++;
  if($row["sem4_sgpa"]==0)break;
  $check++;
  if($row["sem5_sgpa"]==0)break;
  $check++;
  if($row["sem6_sgpa"]==0)break;
  $check++;
  if($row["sem7_sgpa"]==0)break;
  $check++;
  if($row["sem8_sgpa"]==0)break;
  $check++;
break;
}
 $re = ($row["sem1_sgpa"]+$row["sem2_sgpa"]+$row["sem3_sgpa"]+$row["sem4_sgpa"]+$row["sem5_sgpa"]+$row["sem6_sgpa"]+$row["sem7_sgpa"]+$row["sem8_sgpa"])/$check;
?>
<tr>                        
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["roll_no"]; ?></td>
    <td><?php echo $row["sem1_sgpa"]; ?></td>
    <td><?php echo $row["sem2_sgpa"]; ?></td>
    <td><?php echo $row["sem3_sgpa"]; ?></td>
    <td><?php echo $row["sem4_sgpa"]; ?></td>
    <td><?php echo $row["sem5_sgpa"]; ?></td>
    <td><?php echo $row["sem6_sgpa"]; ?></td>
    <td><?php echo $row["sem7_sgpa"]; ?></td>
    <td><?php echo $row["sem8_sgpa"]; ?></td>
    <td><?php echo $row["mentor_name"] ?></td>
    <td><?php echo $re?></td>
    <td><?php echo $check?></td>
</tr>
<?php
$i++;
}
?>
</table>
 </body>
</html>