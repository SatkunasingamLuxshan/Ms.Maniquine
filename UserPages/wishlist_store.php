<?php
// Start the session
session_start();
?>
<?php
include('../config.php');
?>


<?php
if (!empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $id = $_GET["id"];

    $sql = "SELECT * FROM products WHERE product_id= $id  ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $id1 = $row['product_id'];
    $name = $row['product_title'];


    $sql1 = "SELECT * FROM wishlist WHERE product_id= $id  ";
    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_array($result1);


    $prid = $row1['product_id'];
    $email3 = $row1['product_id'];

    $email_query_run = mysqli_query($con, $sql1);

    $username1 = $_SESSION['username'];

    if ((mysqli_num_rows($email_query_run) > 0) && $username1 == $email3) {
    } else {

        $sql6 = "SELECT * FROM `wishlist` WHERE product_id='$id'  ";
        $result6 = mysqli_query($con, $sql6);
        $row6 = mysqli_fetch_array($result6);
        $id2 = $row6['product_id'];
        $email = $row6['user'];

        if ($id2 == $id  && $email==$username) {
        } else {

            $sql = "INSERT INTO wishlist(`name`,`user`,`product_id`)VALUES('$name','$username','$id1')";
            $result = mysqli_query($con, $sql);
        }
    }
}
?>

<script type="text/javascript">
    location.href = 'shop.php';
</script>