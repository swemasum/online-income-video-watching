<?php
include_once "../../../connection.php";
session_start();

if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{
$student_id=$_SESSION['student_id'];
$s_name = $_POST['name'];
$address=$_POST['address'];

$email = $_POST['email'];
$phone_no=$_POST['phone_no'];
$bd_no = $_POST['bd_no'];
$password = $_POST['password'];
$status = $_POST['status'];
$payment_type = $_POST['payment_type'];


$date=date("Y-m-d");


$sql="UPDATE user SET name='$s_name',address='$address',phone_no='$phone_no',email='$email',payment_type='$payment_type',bd_no='$bd_no',password='$password',status='$status' WHERE u_id='$student_id'";
//$sql = "INSERT INTO student_info (s_name,f_name,phone_no,subject,roll_no,session,registration,date,image)
//VALUES ('$s_name','$father_name','$phone_no', '$subject','$roll_no','$session','$registration','$date','$uniquename')";
if (mysqli_query($conn, $sql)) {


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


///find out last id

header('Location:all_user.php');

}


 ?>
