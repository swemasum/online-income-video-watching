<?php
	include_once "connection.php";
  $user_id = $_POST['user_id'];
 $v_id = $_POST['v_id'];
$sql = "SELECT amount FROM payment";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $amount=$row['amount'];
    }
} else {
    echo "0 results";
}



  $date=date("Y-m-d");

$status='no';
 $sql = "select * from view where video_id='$v_id' and user_id='$user_id' and date='$date'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $status='yes';
    }
} else {
    echo "0 results";
}

if($status=='no'){
  $sql = "INSERT INTO view (user_id, video_id,amount,date)
  VALUES ('$user_id', '$v_id','$amount','$date')";

  if (mysqli_query($conn, $sql)) {

  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}




 ?>
