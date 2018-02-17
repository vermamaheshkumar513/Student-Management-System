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

 <form method="post" action="addstudent.php" style="background-color:cyan;height:450px;" enctype="multipart/form-data">
   <table height="50%" align="center";>
         <tr>
             <td>Roll No</td>
             <td><input type="number" name="rollno" required></td>
         </tr>
         <tr>
             <td>Name</td>
             <td><input type="text" name="name" required></td>
         </tr>
         <tr>
             <td>City</td>
             <td><input type="text" name="ghar" required></td>
         </tr>
         <tr>
             <td>Parents Contact</td>
             <td><input type="text" name="pcon" required></td>
         </tr>
         <tr>
             <td>Standrad</td>
             <td><input type="number" name="standr" required></td>
         </tr>
         <tr>
             <th>Image</th>
             <td><input type="file" name="simg" required></td>
         </tr>

        <tr>

             <td colspan="2" align="center"><input type="submit" name="submit" value="add" required></td>
         </tr>

   </table>
   <h3 align="left"><a href="admindash.php">Back to Dashboard</a></h3>
   <h3 align="right"><a href="logout.php">Logout</a></h3>


 </form>
</body>
</html>
<?php
 if(isset($_POST['submit']))
  {
     $c=mysqli_connect('localhost','root','','sms');
     $roll = $_POST['rollno'];
     $nmm = $_POST['name'];
     $cty = $_POST['ghar'];
     $con = $_POST['pcon'];
     $stand = $_POST['standr'];
     $imagename = $_FILES['simg']['name'];
     $tempname = $_FILES['simg']['tmp_name'];
     move_uploaded_file($tempname,"../dataimg/$imagename");
    

    $qry="INSERT INTO `newtable`(`Roll No`, `Name`, `City`, `Parent  Contact`, `Standrad`,`image`) VALUES ('$roll','$nmm','$cty','$con','$stand', '$imagename')";
     $run =mysqli_query($c,$qry);

      if($run == true)
        {
           ?>
             <script>
               alert('Data Inserted Successfully');
             </script>
           <?php
        }
      else {
        echo "some error";
       }
   }
 ?>
