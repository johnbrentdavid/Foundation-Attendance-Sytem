<?php
    //This is just for the connection to the database
    require_once("dconnection.php");
    $query = "SELECT * FROM attendance";
    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title>Admin Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <br><br><br><br>
  <div style="" ><h1>Dashboard</h1></div>
  <body>
  
  <div class="">
        <table class="">
          <thead> 
            <th change="true">ID</th>  
            <th change="true">STUDENT NUMBER</th>
            <th change="true">STUDENT NAME</th>
            <th change="true">TIME-IN</th>
            <th change="true">TIME-OUT</th>
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