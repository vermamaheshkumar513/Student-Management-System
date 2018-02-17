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
      include('../dbconn.php');

  $sid = $_GET['sid'];

  $qry ="SELECT * FROM `newtable` WHERE  `Id`='$sid'";
  $run =mysqli_query($conn,$qry);
  $data = mysqli_fetch_assoc($run);
?>
<form method="post" action="updatedata.php" style="background-color:cyan;height:450px;">
  <table height="50%" align="center";>
        <tr>
            <td>Roll No</td>
            <td><input type="number" name="rollno" value="<?php echo $data['Roll No']; ?>" required></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $data['Name']; ?>" required></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="ghar" value="<?php echo $data['City']; ?>" required></td>
        </tr>
        <tr>
            <td>Parents Contact</td>
            <td><input type="text" name="pcon" value="<?php echo $data['Parent  Contact']; ?>" required></td>
        </tr>
        <tr>
            <td>Standrad</td>
            <td><input type="number" name="standr" value="<?php echo $data['Standrad']; ?>" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" ></td>
        </tr>

       <tr>
           <input type="">
            <td colspan="2" align="center">
              <input type="hidden" name="sid" value="<?php echo $data['Id'];?>">
              <input type="submit" name="submit" value="add" required>
            </td>
        </tr>

  </table>
</form>
