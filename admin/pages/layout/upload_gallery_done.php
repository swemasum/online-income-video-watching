

<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{

include_once "../../../connection.php";
$title=$_POST['title'];


$date=date("Y-m-d");

///file upload
///file upload
$name = $_FILES['file']['name'];
$tmp_name =  $_FILES['file']['tmp_name'];
$location = "gallery/";
$uniquename=time()."-".rand(1000, 9999)."-".$name;
echo $uniquename;
$new_name = $location.$uniquename;
if (move_uploaded_file($tmp_name, $new_name)){
            echo "uploaded";
}
else{
    sleep(rand(1,5));
    $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
    if (move_uploaded_file($tmp_name, $new_name)){
            echo "uploaded";
    }
    else{
      $uniquename='';
            echo"failed, better luck next time";
    }
}
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$g_id=$_SESSION['g_id'];

  $sql = "UPDATE gallery SET title = '$title', date= '$date', image_name='$uniquename' WHERE g_id = $g_id";



if (mysqli_query($conn, $sql)) {
    echo "Successfully update batch no";
 header('Location:show_gallery.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
