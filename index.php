<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:skyblue;">
    <h3 align="right"><a href="login.php">Admin Login</a></h3>

      <h1 align="center" style="color:darkred;"><b>Welcome Student Management System</b></h1>

           <h2 align="center">Student Information</h2>

      <form action="index.php" method="post">
        <table align="center" width="30%" border="1">

              <tr>
                   <th>Choose Standard</th>
                   <td>
                       <select name="std" required>
                             <option value="">Select</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>
                             <option value="6">6</option>
                             <option value="7">7</option>
                             <option value="8">8</option>
                             <option value="9">9</option>
                         </select>
                   </td>
              </tr>

              <tr>
                   <th>Enter Roll No</th>
                   <td><input type="number" name="roll" required="required"></td>
              </tr>
              <tr>
                  <td colspan="2" align="center"><input type="submit" value="showinfo" name="submit"></td>
              </tr>
        </table>

      </form>
  </body>
</html>
<?php
      if(isset($_POST['submit']))
        {
          $stand = $_POST['std'];
          $Roll =$_POST['roll'];

              include('dbconn.php');
              include('function.php');

         showdetails(  $stand ,  $Roll);
        }
 ?>
