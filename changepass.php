<?php
session_start();
if(isset($_POST['login'])){
INCLUDE_ONCE('connection.php');
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);


     $sql = "SELECT u_id FROM user where email='$email' and security_ans='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      if($row = mysqli_fetch_assoc($result)) {

            $_SESSION['user']=$row['u_id'];

            header('Location:index.php');

      }else{

      }
  } else {
  header('Location:enteremailans.php?mess=sorry');
  }

  mysqli_close($conn);
   }

 ?>
