<?php
session_start ();

 if(isset($_SESSION['uid']))
  {
    echo "";
  }
  else {
    header('loaction:../login.php');
  }
 ?>

<?php
  include('header.php');
?>

 <div class="welcome">

    <h1 align="center">Welcome to Admin Dashboard</h1>

 </div>
 <div class="function">
    <table border="1" style="margin-left:340px;" width="40%">
        <tr style="font-size:20px;"><td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td></tr>
        <tr style="font-size:20px;"><td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td></tr>
        <tr style="font-size:20px;"><td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td></tr>

    </table>
    <h4 align="right"><a href="logout.php">Logout</a></h4>
 </div>
</body>
</html>
