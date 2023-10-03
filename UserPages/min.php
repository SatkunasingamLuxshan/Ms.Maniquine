<?php
include('header.php');
?>
<style>

<?php include 'Style.css' ?>
</style>


<?php

$id = $_POST["id"];
$size = $_POST["cat_title"];
$quandity = $_POST["quandity"];
$sql = "SELECT * FROM products WHERE product_id= $id  ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);



if($size=='S'){
    $min= $row["small"];
    $min=$min- $quandity;
    $sql = "UPDATE products SET  small='$min'WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
  

    
}
else if($size=='L'){
    $lg= $row["large"];
    $lg=$lg- $quandity ;
    $sql = "UPDATE products SET  `large`='$lg'WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
}
else{
    $md= $row["medium"];
    $md=$md- $quandity;
    $sql = "UPDATE products SET  medium='$md'WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
}

$sql1 = "SELECT * FROM products WHERE product_id= $id  ";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($result1);
  
if($row1["small"]<=0){
    $sql = "UPDATE products SET  small='0' WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
}

if($row1["large"]<=0){
    $sql = "UPDATE products SET  large='0' WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
}

if($row1["medium"]<=0){
    $sql = "UPDATE products SET  medium='0' WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
}


?>



<div style="margin-top: 200px;">

</div>



<?php
include('footer.php'); // for footer
?>
<script type="text/javascript">location.href = 'shop.php';</script>