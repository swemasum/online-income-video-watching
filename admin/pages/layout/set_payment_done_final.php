
<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{


include_once "../../../connection.php";
$date=date("Y-m-d");
if($_POST['amount']!=""){
$amount=mysqli_real_escape_string($conn,$_POST['amount']);
$sql = "UPDATE payment SET amount='$amount',date='$date'";

if (mysqli_query($conn, $sql)) {

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
if($_POST['reg_amount']!=""){
  $reg_amount=mysqli_real_escape_string($conn,$_POST['reg_amount']);
  $sql = "UPDATE reg_amount SET amount='$reg_amount',date='$date'";

  if (mysqli_query($conn, $sql)) {

  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
}




  header('Location: set_payment.php');
mysqli_close($conn);

}
?>
