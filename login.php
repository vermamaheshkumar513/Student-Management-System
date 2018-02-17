<?php
      session_start ();
      if(isset($_SESSION['uid']))
        {
          header('loaction:admin/admindash.php');
        }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:cyan;">
    |<h1 align="center" style="color:blue;">Admin Login</h1>
  <form action="login.php" method="post">
           <table align="center">
              <tr>
                  <td>User Name:</td>
                  <td><input type="text" name="name" required="required"></td>
              </tr>
              <tr>
                  <td>Password:</td>
                  <td><input type="password" name="pass" required></td>
              </tr>
              <tr>
                    <td colspan="2" align="center"><input type="submit" value="Login" name="login"></td>
               </tr>
       </table>
   </form>

  </body>
</html>
<?php
    include('dbconn.php');
   if(isset($_POST['login']))
     {

         $username=$_POST['name'];
         $password=$_POST['pass'];


       $qry ="SELECT * FROM `admin` WHERE `UserName`='$username' AND  `Password`='$password'";
       $run = mysqli_query($conn,$qry);

       $row = mysqli_num_rows($run);
       $row = mysqli_num_rows($run);

       if($row<1)
         {
           ?>
           <script>
                 alert('Sorry! password and username are not matched');
                 window.open('login.php','_self');
           </script>
           <?php
         }
        else
         {
            $data=mysqli_fetch_assoc($run);
            $id = $data['Id'];



            $_SESSION['uid'] = $id;
            header('location:admin/admindash');
        }
     }
 ?>
