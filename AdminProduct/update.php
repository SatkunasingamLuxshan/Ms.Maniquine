<?php
include('adminhead.php');// used comman header its include head nav, side nav ,  sql conection and stylesheets
?>
   <title>Item Update</title>

<?php
if(isset($_POST['submit'])) 
{ 
    
    $id = $_GET['id'];

   
    $sql = "SELECT * FROM products where product_id=$id";// get the specific products for edit
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_cat = $_POST['cat_title'];
    $small = $_POST['small'];
    $medium = $_POST['medium'];
    $large = $_POST['large'];
    

    $small=$small + $row["small"];
    $medium=$medium + $row["medium"];
    $large=$large+ $row["large"];
    
    $sql = "UPDATE products SET product_title='$product_title',product_price='$product_price',product_cat='$product_cat', small='$small', medium='$medium', large='$large' WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);


}
?>
<script type="text/javascript">location.href = 'itemindex.php';</script>