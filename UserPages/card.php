<?php
// Start the session
session_start();
?>
<?php
include('../config.php');
?>


<?php
$username=$_SESSION['username'] ;
$id = $_GET["id"];

$sql = "SELECT * FROM products WHERE product_id='$id'  ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$id1=$row['product_id'];
$name=$row['product_title'];


$sql1 = "SELECT * FROM `cart` WHERE product_id='$id'  ";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($result1);
$id2=$row1['product_id'];
$email=$row1['username'];

if($id2==$id && $email==$username ){

}
else{
    $sql = "INSERT INTO cart(`name`,`username`,`product_id`)VALUES('$name','$username','$id1')";
    $result = mysqli_query($con, $sql);
}



 ?>

<script type="text/javascript">location.href = 'shop.php';</script> 