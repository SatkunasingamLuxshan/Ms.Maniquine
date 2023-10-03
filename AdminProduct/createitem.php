

<?php
include('adminhead.php');
?>
   <title>Create Item</title>
<?php
$sql = "SELECT * FROM categories";
$result = mysqli_query($con, $sql);
?>


<?php
if (isset($_POST['submit'])) {
  if ($con) {

    $product_title = $_POST["product_title"];
    $product_price = $_POST["product_price"];
    $cat_title = $_POST["cat_title"];

    $small = $_POST["small"];
    $medium = $_POST["medium"];
    $large= $_POST["large"];
    $description= $_POST["description"];
    $filename = $_FILES["filename"]["name"];
    $tempname = $_FILES["filename"]["tmp_name"];
    $folder = "../product_images/" . $filename;




    $sql = "INSERT INTO products(`product_title`,`product_price`,`filename`,`product_cat`,`small`,`medium`,`large`,`description`)VALUES('$product_title','$product_price','$filename','$cat_title','$small','$medium','$large','$description')";
    $result = mysqli_query($con, $sql);




    if (move_uploaded_file($tempname, $folder)) {
      $msg = "photo uploaded";
    } else {
      $msg = "filed ";
    }
  } else {
    echo "connection fail";
  }
}
?>
<!-- form -->


<?php
$sql = "SELECT * FROM categories";
$result = mysqli_query($con, $sql);
?>
<div class="col-8 ">
  <h1 style="color:purple ; font-family: 'Playfair Display'">PRODUCT PAGE</h1>
 
  <div class="card card-primary  size " style="background: rgba(84, 151, 251, 0.2); ">

    <div class="card-header bg-primary" style="color: white;">
      <h3 class="card-title" style="font-family: 'Playfair Display'">Add New Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class=" table-responsive p-0" style="max-height:474px; background: rgba(84, 151, 251, 0.2);">

      <div class=" card-body  " style="color: #444444;">
        <div class="form-group">
          <label for="product_title">Product Title</label>
          <input type="text" class="form-control" name="product_title" id="product_title" placeholder="Enter  Product Title" autofocus Required>

        </div>
        <div class="form-group">
          <label for="product_price">Product Price</label>
          <input type="text" class="form-control" name="product_price" id="product_price" placeholder="Enter Price" Required>


        </div>



        <div>
          <label for="cat_title">Categories</label>
          <select name="cat_title" id="cat_title" class="form-control">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
              <option value="<?php echo $row['cat_title'] ?>"><?php echo $row['cat_title'] ?></option>
            <?php   } ?>

          </select><br><br>
        </div>

        <div class="row">
          <div class="col-3">
            <div class="form-group">
              <label for="small">Small</label>
              <input type="text" class="form-control" name="small" id="small" placeholder="Enter Quandity">


            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label for="medium">Medium</label>
              <input type="text" class="form-control" name="medium" id="medium" placeholder="Enter Quandity">


            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label for="large">Large</label>
              <input type="text" class="form-control" name="large" id="large" placeholder="Enter Quandity">


            </div>

          </div>
        </div>


      
            <div class="form-group">
              <label for="">Description</label>
              
              <textarea name="description" id="description"  rows="4" cols="30" placeholder="Enter Description" class="form-control">

              </textarea>

            </div>


        <div>
          <label for="photo">Choose Photo</label><br>
          <input type="file" name="filename" id="filename" value="" Required>

        </div>
        <div class="card-footer">
          <button type="submit" value="submit" name="submit" class="btn btn-primary" id="btn_shadow_form">Submit</button>
          <input type="button" value="GoBack" onclick="history.back()" class="btn btn-primary " id="btn_shadow_form">



          <a href="itemindex.php" class="btn btn-primary">Edit</a>
          <a href="addcatgory.php" class="btn btn-primary">ADD Catgory</a>
        </div>
      </div>
    </form>

  </div>

</div>
</div>



</div>


<?php
include('adminfooter.php'); // comman footer for the page
?>