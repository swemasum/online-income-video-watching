<?php
include_once "../../../connection.php";
session_start();

if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{
$v_id=$_SESSION['student_id'];


$title=mysqli_real_escape_string($conn,$_POST['title']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$link=mysqli_real_escape_string($conn,$_POST['link']);



  ///file upload
if($_FILES['file']['name']!=''){
  $name = $_FILES['file']['name'];
  echo $name;
  $tmp_name =  $_FILES['file']['tmp_name'];
  $location = "../../../video/";
  $uniquename=time()."-".rand(1000, 9999)."-".$name;

  $new_name = $location.$uniquename;
  if (move_uploaded_file($tmp_name, $new_name)){
              }
  else{

      $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
      if (move_uploaded_file($tmp_name, $new_name)){
                  }
      else{
        $uniquename='';

      }
  }





  $sql="UPDATE video SET image='$uniquename' WHERE v_id='$v_id'";
  unlink("../../../video/".$_SESSION['image']) ;
  unset($_SESSION['image']);
  //$sql = "INSERT INTO student_info (s_name,f_name,phone_no,subject,roll_no,session,registration,date,image)
  //VALUES ('$s_name','$father_name','$phone_no', '$subject','$roll_no','$session','$registration','$date','$uniquename')";
  if (mysqli_query($conn, $sql)) {


  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}




$sql="UPDATE video SET title='$title',description='$description',link='$link' WHERE v_id='$v_id'";
//$sql = "INSERT INTO student_info (s_name,f_name,phone_no,subject,roll_no,session,registration,date,image)
//VALUES ('$s_name','$father_name','$phone_no', '$subject','$roll_no','$session','$registration','$date','$uniquename')";
if (mysqli_query($conn, $sql)) {


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


///find out last id

header('Location:all_video.php');

}


 ?>
