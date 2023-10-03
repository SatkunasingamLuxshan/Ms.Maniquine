<?php
include('adminhead.php'); // used comman header its include head nav, side nav ,  sql conection and stylesheets
?>

<title>Edit Page</title>

<?php
$id = $_GET['id']; // get the specific id for edit the item
$sql = "SELECT * FROM products where product_id=$id"; // get the specific products for edit
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);


$sql1 = "SELECT * FROM categories"; // get the categories for list view
$result1 = mysqli_query($con, $sql1);


?>



<div class=" col-8">
    <h1 style="color:purple ;font-family: 'Playfair Display'">PRODUCT PAGE<i class="fa fa-address-book-o" aria-hidden="true"></i></h1>
    <div class="card card-primary size" style="background: rgba(84, 151, 251, 0.2); ">
        <div class="card-header">
            <h3 class="card-title" style="font-family: 'Playfair Display'">Update Now</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="update.php?id=<?php echo $row['product_id'] ?>" method="POST" enctype="multipart/form-data" class=" table-responsive p-0" style=" background: rgba(84, 151, 251, 0.2);">


            <div class="card-body" style="color: #444444;">
                <div class="form-group">
                    <label for="product_title">Product Title</label>
                    <input type="text" class="form-control" name="product_title" value="<?php echo $row["product_title"]; ?>" id="product_title" placeholder="Enter product_title">

                </div>

                <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="text" class="form-control" name="product_price" value="<?php echo $row["product_price"]; ?>" id="product_price" placeholder="Enter product_price">

                </div>

                <div>


                    <label for="cat_title">Categories</label>
                    <select name="cat_title" id="cat_title" class="form-control">

                        <?php while ($row1 = mysqli_fetch_array($result1)) { ?>
                            <option value="<?php echo $row1['cat_title'] ?>" <?php if ($row['product_cat'] == $row1['cat_title']) {
                                                                                    echo " selected";
                                                                                } ?>> <?php echo $row1['cat_title'] ?> </option>
                        <?php } ?>
                    </select>

                    <br><br>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="small">Small</label>
                            <input type="text" class="form-control" name="small" id="small" placeholder="Add Quandity">


                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="medium">Medium</label>
                            <input type="text" class="form-control" name="medium" id="medium" placeholder="Add Quandity">


                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="large">Large</label>
                            <input type="text" class="form-control" name="large" id="large" placeholder="Add Quandity">


                        </div>

                    </div>
                </div>

               


                <div class="card-footer">
                    <button type="submit" value="Save" name="submit" class="btn btn-primary" id="btn_shadow_form">Submit</button>
                    <input type="button" value="GoBack" onclick="history.back()" class="btn btn-primary " id="btn_shadow_form">
                </div>
        </form>


    </div>
</div>


</div>
</div>




<?php
include('adminfooter.php'); // comman footer for the page
?>