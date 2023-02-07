<?php
    //This is just for the connection to the database
    require_once("dconnection.php");
    $query = "SELECT * FROM attendance";
    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <title>Admin Page</title>
  <head>
    <link rel='stylesheet' type="text/css" href='css/dboard.css'>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <div class='header'>
      <p class='hello'>Hello,</p>
      <p class='cps'>CPS</p>
      <p class='dpmt'>Department</p>
      <img class = img src="img/CPS_Logo.png" alt="CPS Logo">
      <button class='logout'>Logout</button>
    </div>
  </head>
  <br><br><br><br>
  
  <body>
  <button class="export">Export</button>
  <div class="">
        <table class="">
          <thead> 
            <th change="true">ID</th>  
            <th change="true">Student Number</th>
            <th change="true">Name</th>
            <th change="true">Time-IN</th>
            <th change="true">Time-OUT</th>
          </thead>

          <?php
            while($row= mysqli_fetch_assoc($result)){
              $Id = $row['id'];
              $Num = $row['snum'];
              $Name = $row['sname'];
              $TimeIn = $row['time_in'];
              $TimeOut = $row['time_out'];
          ?>

          <tr>
            <td><?php echo $Id?></td>
            <td><?php echo $Num?></td>
            <td><?php echo $Name?></td>
            <td><?php echo $TimeIn?></td>
            <td><?php echo $TimeOut?></td>
          </tr>

            <?php
                }//end of while loop that displays table data
            ?>
      </table>
          
  </div>
</body>
</html>
