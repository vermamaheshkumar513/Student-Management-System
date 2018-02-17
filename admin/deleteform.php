<?php
$c=mysqli_connect('localhost','root','','sms');

$id=$_REQUEST['sid'];

$qry="DELETE FROM `newtable` WHERE `Id`='$id';";
$run =mysqli_query($c,$qry);

 if($run == true)
   {
      ?>
        <script>
          alert('Data Delete Successfully');
        window.open('deletestudent.php','_self');
        </script>
      <?php
   }
 else {
   echo "some error";
  }
 ?>
