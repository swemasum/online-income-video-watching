<?php

session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{

if(isset($_GET['id'])){
  include_once "../../../connection.php";

  $id=mysqli_real_escape_string($conn,$_GET['id']) ;
  $ref=mysqli_real_escape_string($conn,$_GET['ref']) ;

  $sql = "UPDATE user SET status='active' WHERE u_id='$id'";

  if (mysqli_query($conn, $sql)) {

  } else {

  }
      if($ref!=""){
        $sql = "SELECT amount FROM reg_amount";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  $re_amount=$row['amount'];
  }
}
$date=date("Y/m/d");
        $sql = "INSERT INTO reference (refered_by_id,refered_id, amount,date)
VALUES ('$id', '$ref', '$re_amount','$date')";

        if (mysqli_query($conn, $sql)) {

        } else {

        }
      }

    header("Location:table.php");

  mysqli_close($conn);


}else{
  header("Location:table.php");
}

}

 ?>
