<?php
    function showdetails(  $stand ,  $Roll)
    {
        include('dbconn.php');

        $qry = "SELECT * FROM `newtable` WHERE `Standrad`='$stand' AND `Roll No`='$Roll';";
        $run =mysqli_query($conn,$qry);

       if(mysqli_num_rows($run)>0)
         {
           $data =mysqli_fetch_assoc($run);
           ?>
              <table border="1">
                      <tr>
                        <th>Id</th>
                        <th>Roll NO</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Parent Contact</th>
                        <th>Standard</th>
                        <th>Image</th>
                      </tr>
                      <tr>
                      <td><?php  echo $data['Id'];?></td>

                      <td><?php  echo $data['Roll No'];?></td>

                      <td><?php  echo $data['Name'];?></td>

                      <td><?php  echo $data['City'];?></td>

                      <td><?php  echo $data['Parent  Contact'];?></td>

                      <td><?php  echo $data['Standrad'];?></td>

                      <td><?php  echo $data['image'];?></td>
                    </tr>
              </table>
           <?php
         }
       else {
          echo "<script>alert('No record Found');</script>";
       }

    }
 ?>
