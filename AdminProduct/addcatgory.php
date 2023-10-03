<?php
include('adminhead.php');


$sql = "SELECT * FROM categories";
$result = mysqli_query($con, $sql);


if (isset($_POST['submit'])) {

  if ($con) {
    $id = $_POST["cat_id"];
    $name = $_POST["cat_title"];





    $sql = "INSERT INTO categories(`cat_title`,`cat_id`)VALUES('$name','$id')";
    $result = mysqli_query($con, $sql);
  } else {
    echo "connection fail";
  }
}
?>
<!-- form -->
<title>Add Catgory</title>
<style>


</style>
<div class="col-8">
  <h1 style="color:purple; font-family: 'Playfair Display', serif;"> CATGORY PAGE</h1>
  <div class="card card-primary  size " style="background: rgba(84, 151, 251, 0.2); ">

    <div class="card-header bg-primary" style="color: white;">
      <h3 class="card-title" style="font-family: 'Playfair Display', serif;">Add New Catgory</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class=" table-responsive p-0" style="max-height:480px;">

      <div class=" card-body  " style="color: #444444;">
        <div class="form-group">
          <label for="cat_id">ID</label>
          <input type="text" class="form-control" name="cat_id" id="cat_id" placeholder="Enter ID" autofocus Required>

        </div>
        <div class="form-group">
          <label for="cat_title">Name</label>
          <input type="text" class="form-control" name="cat_title" id="cat_title" placeholder="Enter Name" Required>


        </div>




        <div class="card-footer">
          <button type="submit" value="submit" name="submit" class="btn btn-primary" id="btn_shadow_form">Submit</button>
          <input type="button" value="GoBack" onclick="history.back()" class="btn btn-primary " id="btn_shadow_form">



          <a href="itemindex.php" class="btn btn-primary">Edit</a>

        </div>
      </div>
    </form>

  </div>

</div>
</div>



</div>
<footer class="main-footer " style="background: rgba(0, 126, 233, 0.2);">
      <!-- To the right -->
      <div class="footermove">
      <div class="float-right d-none d-sm-inline">
        JAFFNA COLLEGE STUDENT MANAGEMENT SYSTEM
      </div>
      <!-- Default to the left -->
      <div>
        <strong>COPYRIGHT &copy; 2020-2029 <a href="https://adminlte.io">SMS Dix.io</a>.</strong> ALL RIGHTS RESERVED.
      </div>
      </div>
    </footer>
</body>

</html>