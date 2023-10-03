<?php
include('adminhead.php');
?>
   <title>Delete Page</title>
<?php

if ($con) {

    $id  = $_GET['id'];
    $sql = "DELETE  FROM products WHERE product_id = $id";
    $result = mysqli_query($con, $sql);

?>




<?php
} else {
    echo "connection fail";
}

?>
<div style="margin-top: 100px;">
    <h1 style="color: green;" style="  font-family: 'Playfair Display', serif;">DELETED SUCCESSFULLY</h1>
    <div>
        <input type="button" value="GoBack" onclick="history.back()" class="btn btn-primary " id="btn_shadow_form" style="  font-family: 'Playfair Display', serif;">
    </div>
</div>

</div>
</div>

<?php
include('adminfooter.php'); // comman footer for the page
?>