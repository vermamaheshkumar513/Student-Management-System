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
              <table>
                      <th>Id</th>
                      <td><?php  echo $data['Id'];?></td>
                    
              </table>
           <?php
         }
       else {
          echo "<script>alert('No record Found');</script>";
       }

    }
 ?>
