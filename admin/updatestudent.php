<?php
session_start ();

 if(isset($_SESSION['uid']))
  {
    echo "";
  }
  else {
    header('location:../login.php');
  }
 ?>

<?php

  include('header.php');
    include('titlehead.php');
?>
<form action="updatestudent.php" method="post" style="background-color:gray;">
  <table  align="center">
       <tr>
           <th>Enter Standrad</th>
           <td><input type="number" name="stand" required></td>

           <th>Enter Name</th>
           <td><input type="name" name="sname" required></td>

           <td><input type="submit" name="submit" value="search"></td>
       </tr>


  </table>
  <table align="center" width="80%" border="1" style="margin-top:30px;">
    <tr style="background-color:#000; color:#fff;">
          <th>No</th>
          <th>Image</th>
          <th>Name</th>
          <th> Roll No</th>
          <th> Edit</th>
    </tr>
    <?php
       if(isset($_POST['submit']))
        {
          include('../dbconn.php');

          $standrad = $_POST['stand'];
          $name = $_POST['sname'];

          $qry = "SELECT * FROM `newtable` WHERE `Standrad`='$standrad' AND `Name` LIKE '%$name%'";
          $run =mysqli_query($conn,$qry);

          if(mysqli_num_rows($run)<1)
           {
             echo "<tr><td colspan='5'>No Record found</td></tr>";
           }
           else {
                  $count=0;
                  while($data=mysqli_fetch_assoc($run))
                   {
                      $count++;
                     ?>
                     <tr>
                           <td><?Php echo $count; ?></td>
                           <td><img src="../dataimg/<?php $data['image'];?>" style="max-width:100px;"</td>
                           <td><?php echo $data['Name']; ?></td>
                           <td><?php echo $data['Roll No']; ?></td>
                           <td><a href="updateform.php?sid=<?php echo $data['Id']; ?>">Edit</a></td>
                     </tr>
                     <?php
                   }
           }

        }
     ?>

  </table>
</form>
