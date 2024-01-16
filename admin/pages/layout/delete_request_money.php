<?php

session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{

if(isset($_GET['id'])){
  include_once "../../../connection.php";

  $id=mysqli_real_escape_string($conn,$_GET['id']) ;

  $sql = "delete from request where r_id='$id'";

  if (mysqli_query($conn, $sql)) {
  header("Location:request_money.php");
  } else {

  }

  mysqli_close($conn);


}else{
  header("Location:table.php");
}

}

 ?>
