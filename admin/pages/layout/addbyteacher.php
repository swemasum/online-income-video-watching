<?php
include_once "../../../connection.php";
session_start();

if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{



$title=mysqli_real_escape_string($conn,$_POST['title']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$link=mysqli_real_escape_string($conn,$_POST['link']);
  ///file upload
  $name = $_FILES['file']['name'];
  $tmp_name =  $_FILES['file']['tmp_name'];
  $location = "../../../video/";
  $uniquename=time()."-".rand(1000, 9999)."-".$name;

  $new_name = $location.$uniquename;
  if (move_uploaded_file($tmp_name, $new_name)){
              }
  else{
      sleep(rand(1,1));
      $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
      if (move_uploaded_file($tmp_name, $new_name)){
                  }
      else{
        $uniquename='';

      }
  }



$date=date("Y-m-d");

$sql = "INSERT INTO video (title,description,link,date,image)
VALUES ('$title','$description','$link','$date','$uniquename')";
if (mysqli_query($conn, $sql)) {


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
///find out last id
header("Location:add_video.php");

  mysqli_close($conn);
}

 ?>
