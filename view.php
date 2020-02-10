<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","emp");
if(count($_POST)>0) {
$roll_no=$_POST[roll_no];
$result = mysqli_query($conn,"SELECT * FROM employee where roll_no='$roll_no' ");
}
?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <script> 
            $(document).ready(function() { 
                $("#submit").click(function() { 
                    var v1 = $("#year option:selected"); 
                    var v2 = $("#sem option:selected");
                    var v3 = $("#prog option:selected");  
                    alert("you have selected \nYear:"+v1.text()+"\nSemester:"+v2.text()+"\nProgress Report:"+v3.text()); 
                }); 
            }); 
        </script> 
    </head>
    <body>
       <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><img src="klhlogo.png" alt="klh logo" height="56" width="112"/></li>
            </ul>
            <ul class="nav navbar-nav navbar-nav">
              <center><h3 style="color: aliceblue;text-align: right; margin-left: 100;">Student Report</h3></center>
            </ul>
          </div>
        </nav>

            <form class="form-inline">
                <div class="container">  
                    <div style="float: right">
                        <img id="photo" src="/e-com/images/logo.jpg" alt="profile photo" style="margin-right:20%;margin-top:40%"/>
                    </div> 
                    <div class="container-fluid" style="float:left">        
                    <table class="table table-hover" style="margin-left:20%;margin-top:20%">
                        <tr>
                          <th>Name</th>
                          <td id="Name"><?php echo $row["name"]; ?></td>
                        </tr>
                        <tr>
                          <th>ID Number</th>
                          <td id="id_num"><?php echo $row["roll_no"]; ?></td>
                        </tr>
                        <tr>
                          <th>Year of Join</th>
                          <td id="year_of_join">2018</td>
                        </tr>
                        <tr>
                          <th>Date Of Birth</th>
                          <td id="date_of_birth">30-09-2001</td>
                        </tr>
                        <tr>
                            <th>Present Year</th>
                            <td id="present_year">2nd Year</td>
                          </tr>
                          <tr>
                            <th>Present Semister</th>
                            <td id="present_sem">4th</td>
                          </tr>
                          <tr>
                            <th>Mentor</th>
                            <td id="mentor">Dr.Megha</td>
                          </tr>
                          <tr>
                            <th>Achievements</th>
                            <td id="achievements">Won Hackthon</td>
                          </tr>
                          <tr>
                            <th>Remarks</th>
                            <td id="remarks">Bad Boy</td>
                          </tr>
                    </table>
                    <br>
              <h4 style="margin-left:20%">Reports:</h4>
                <div class="btn-group"style="padding-left: 150px">
                  <div class="form-group">
                    <label for="sel1">Year:</label>
                    <select class="form-control" id="year">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="sel1">Semester:</label>
                    <select class="form-control" id="sem">
                      <option>Even</option>
                      <option>Odd</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="sel1">Progress Report:</label>
                    <select class="form-control" id="prog">
                      <option>InSem-1</option>
                      <option>InSem-2</option>
                      <option>EndSem</option>
                    </select>
                  </div>


                  </div>
                  <div class="row" style="margin-left:20%">
                    <br>
                  <input type="submit" id="submit"class="btn btn-info" value="Submit Button">
                </div>
            </form>
              </div>
<?php
$i++;
}
?>
    </body>
</html>