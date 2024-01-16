


       <?php
       session_start();
            if(!isset($_SESSION['user'])){
       header("Location:index.php");
            }
       if(isset($_POST['submit'])){
INCLUDE_ONCE('connection.php');
$name=mysqli_real_escape_string($conn,$_POST['name']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$phone_no=mysqli_real_escape_string($conn,$_POST['phone_no']);

  $bd_no=mysqli_real_escape_string($conn,$_POST['bd_no']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
   $pet=mysqli_real_escape_string($conn,$_POST['pet']);
   $payment_type=mysqli_real_escape_string($conn,$_POST['payment_type']);

     //$ref_id=mysqli_real_escape_string($conn,$_POST['ref_id']);
  $id=$_SESSION['user'];
       $date=date("Y-m-d");
       if(isset($_POST['reg_payment_type'])&&isset($_POST['txid'])){
         $reg_payment_type=mysqli_real_escape_string($conn,$_POST['reg_payment_type']);
         $txid=mysqli_real_escape_string($conn,$_POST['txid']);
         $sql = "UPDATE user SET name='$name',address='$address',phone_no='$phone_no',security_ans='$pet',bd_no='$bd_no',password='$password',payment_type='$payment_type',reg_payment_type='$reg_payment_type',txid='$txid' WHERE u_id='$id'";

       }else{
         $sql = "UPDATE user SET name='$name',address='$address',phone_no='$phone_no',security_ans='$pet',bd_no='$bd_no',password='$password',payment_type='$payment_type' WHERE u_id='$id'";

       }

       if (mysqli_query($conn, $sql)) {
 header("Location:my_profile.php");
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }

       mysqli_close($conn);
     }else{
       header("Location:my_profile.php");
     }

        ?>
