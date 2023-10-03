<?php
include('adminhead.php');
?>
   <title>Item Show Page</title>
<?php


$id  = $_GET['id'];
$sql = "SELECT * FROM `products` WHERE product_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>



<div class="col-md-6" style="margin-top: 50px;">
    <!-- Profile Image -->
    <div class="card card-primary card-outline" style="background:rgba(41, 83, 243, 0.27) ;   font-family: 'Playfair Display', serif;" id="btn_shadow_show">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="../product_images/<?php echo $row["filename"]; ?>" alt="items pict" style="width:100px;height:100px;">
            </div>

            <h3 class="profile-username text-center" style="color: whitesmoke;"></h3>

            <p class="text-center" style="color:whitesmoke">ITEMS</p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                    <b>Product Title</b> <a class="float-right"><?php echo $row['product_title'] ?></a>
                </li>
                <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                    <b>Product Price</b> <a class="float-right"><?php echo $row['product_price'] ?></a>
                </li>
                <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                    <b>Product Category</b> <a class="float-right"><?php echo $row['product_cat'] ?></a>
                </li>
                <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                    <b>Size</b> <a class="float-right"><?php echo $row['size'] ?></a>
                </li>
                <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                    <b>Pices</b> <a class="float-right"><?php echo $row['pices'] ?></a>
                </li>
                <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                    <b>Status</b> <a class="float-right">



                        <span class="badge badge-success"> active</span>


                </li>
            </ul>

            <a class="btn btn-primary btn-block"><b>SHOW ME</b></a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>
<div class="col-md-2" style="margin-top: 50px;">

    <input type="button" value=" GOBACK" onclick="history.back()" class="btn btn-info btn-lg " style="height:520px; color:#fff ; font-family: 'Playfair Display', serif;" id="btn_shadow_showback">
</div>

</div>
<div class="row">
    <div class="col-md-2">
    </div>

</div>
</div>
</div>

<?php
include('adminfooter.php'); // comman footer for the page
?>