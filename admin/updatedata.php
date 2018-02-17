<?php
$c=mysqli_connect('localhost','root','','sms');
$roll = $_POST['rollno'];
$nmm = $_POST['name'];
$cty = $_POST['ghar'];
$con = $_POST['pcon'];
$stand = $_POST['standr'];
$id =$_POST['sid'];




$qry="UPDATE `newtable` SET `Roll No` = '$roll', `Name` = '$nmm', `City` = '$cty', `Parent Contact` = '$con', `Standrad` = '$stand' WHERE `newtable`.`Id` = $id;";
$run =mysqli_query($c,$qry);

 if($run == true)
   {
      ?>
        <script>
          alert('Data Update Successfully');
        window.open('updateform.php?sid=<?php echo $id;?>','_self');
        </script>
      <?php
   }
 else {
   echo "some error";
  }
 ?>
