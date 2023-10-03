<?php
include('header.php');
?>
<title>Setting</title>


<style>
    <?php include '../Style.css'; ?>
    
</style>
<?php include '../style2.css'; ?>
<style>
    
    img {
        border: 1px solid rgba(76, 41, 214, 1);
        border-radius: 4px;
        padding: 5px;
        width: 150px;
    }

    .cardform-popup {
        display: none;



        margin-left: 3px;
        color: #D10024;

    }
</style>

<!-- for upload/edit pic in database -->
<?php
if (isset($_POST['photoupload'])) {
    $uname = $_SESSION['username'];
    $filename = $_FILES["filename"]["name"];
    $tempname = $_FILES["filename"]["tmp_name"];
    $folder = "../product_images/" . $filename;




    $sql = "UPDATE users SET `filename`='$filename' WHERE email='$uname' ";
    $result = mysqli_query($con, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $msg = "photo uploaded";
    } else {
        $msg = "filed ";
    }
} ?>

<!-- for upload/edit user delatils in database -->
<?php
if (isset($_POST['detailsupdate'])) {
    if ($con) {
        $email = $_SESSION['username'];
        $username = $_POST["username"];
        $phoneno = $_POST["phoneno"];
        $address = $_POST["address"];


        $sql = "UPDATE users SET `username`='$username',`phoneno`='$phoneno',`address`='$address' WHERE email='$email' ";
        $result = mysqli_query($con, $sql);
    } else {
        echo "connection fail";
    }
}

?>
<!-- to get the user allthe details from database -->
<?php
$uname = $_SESSION['username'];
$sql3 = "SELECT * FROM users where email='$uname'"; // get the specific products for edit
$result3 = mysqli_query($con, $sql3);
$row3 = mysqli_fetch_array($result3);

?>


<?php
include('temp.php');
?>


<!-- to change password -->
<?php
if (isset($_POST['changedpassword'])) {
    $email = $_SESSION['username'];
    $oldpassword = md5($_POST["oldpassword"]);
    $newpassword = md5($_POST["newpassword"]);
    $conformpassword = md5($_POST["conformpassword"]);

    $sql4 = "SELECT * FROM users where email='$email'"; // get the specific products for edit
    $result4 = mysqli_query($con, $sql4);
    $row4 = mysqli_fetch_array($result4);
    $pas = $row4['password'];

    if ($oldpassword == $pas) {
        if ($newpassword == $conformpassword) {

            $sql = "UPDATE users SET `password`='$newpassword' WHERE email='$email'";
            $result = mysqli_query($con, $sql);
        } else {
        }
    } else {
    }
}

?>





<!-- show user details form-->
<div class="col-5">
    <div style="margin-top:100px;margin-bottom:150px;margin-left:30px">
        <!-- Profile Image -->
        <div class="card card-primary card-outline" style="background:rgba(41, 83, 243, 0.27) ;" id="btn_shadow_show">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="../product_images/<?php echo $row3["filename"]; ?>" alt="items pict" style="width:100px;height:100px;">
                </div>

                <h3 class="profile-username text-center" style="color: whitesmoke;"></h3>

                <p class="text-center" style="color:whitesmoke">USER</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                        <b>User Name</b> <a class="float-right"><?php echo $row3['username'] ?></a>
                    </li>
                    <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                        <b>Email Address</b> <a class="float-right"><?php echo $row3['email'] ?></a>
                    </li>
                    <li class="list-group-item" style="background:rgba(41, 83, 243, 0.01) ;">
                        <b>Phone No</b> <a class="float-right"><?php echo $row3['phoneno'] ?></a>
                    </li>

                </ul>
                <div class="row">
                    <div class="col-4">
                        <a class="btn btn-primary btn-block" onclick="openForm()"><b>Edit Profile Pic</b></a>
                    </div>

                    <div class="col-4">
                        <a class="btn btn-primary btn-block" onclick="opendetailsForm()"><b>Edit Delails</b></a>
                    </div>

                    <div class="col-4">
                        <a class="btn btn-primary btn-block" onclick="openchangepasswordForm()"><b>Change password</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- profile pic upload form -->
<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="openimg" method="POST" enctype="multipart/form-data" class=" table-responsive p-0 cardform-popup" style="width:500px; background: rgba(84, 151, 251, 0.2); margin-top:100px;margin-bottom:100px">

        <div class=" card-body  " style="color: #444444;">

            <div>
                <label for="photo">Choose Photo</label><br>
                <input type="file" name="filename" id="filename" value="" Required>

            </div>
            <div class="card-footer">
                <button type="submit" value="submit" name="photoupload" class="btn btn-primary" id="btn_shadow_form">Submit</button>




                <a class="btn btn-primary" onclick="closeForm()">Close</a>

            </div>
        </div>
    </form>
</div>

<!-- to update user details -->
<div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="details" method="POST" enctype="multipart/form-data" class=" table-responsive p-0 cardform-popup" style="width:500px; background: rgba(84, 151, 251, 0.2); margin-top:100px;margin-bottom:100px">

        <div class=" card-body  " style="color: #444444;">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $row3["username"]; ?>" placeholder="Enter Name" autofocus Required>

            </div>
            <div class="form-group">
                <label for="phoneno">Phone No</label>
                <input type="text" class="form-control" name="phoneno" id="phoneno" value="<?php echo $row3["phoneno"]; ?>" placeholder="Enter Phoneno" Required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="3" class="form-control"><?php echo $row3["address"]; ?></textarea>

            </div>


            <div class="card-footer">
                <button type="submit" value="submit" name="detailsupdate" class="btn btn-primary" id="btn_shadow_form">Change</button>
                <a onclick="closedetailsForm()" class="btn btn-primary">Close</a>
            </div>
        </div>
    </form>

</div>









<!-- change password form -->
<div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="changepassword" method="POST" enctype="multipart/form-data" class=" table-responsive p-0 cardform-popup" style="width:500px;background: rgba(84, 151, 251, 0.2); margin-top:100px;margin-bottom:100px">

        <div class=" card-body  " style="color: #444444;">
            <div class="form-group">
                <label for="oldpassword">Old Password</label>
                <input type="text" class="form-control" name="oldpassword" id="oldpassword" placeholder="Enter Old Password" autofocus Required>

            </div>
            <div class="form-group">
                <label for="newpassword">New Password</label>
                <input type="text" class="form-control" name="newpassword" id="newpassword" placeholder="Enter New Password" Required>
            </div>

            <div class="form-group">
                <label for="conformpassword">Conform Password</label>
                <input type="text" class="form-control" name="conformpassword" id="conformpassword" placeholder="Conform Password" Required>
            </div>


            <div class="card-footer">
                <button type="submit" value="submit" name="changedpassword" class="btn btn-primary" id="btn_shadow_form">Change</button>
                <a onclick="closechangepasswordForm()" class="btn btn-primary">Close</a>
            </div>
        </div>
    </form>

</div>
</div>






<!--Settings body part end-->

<script>
    function openForm() {
        document.getElementById("openimg").style.display = "block";
    }

    function closeForm() {
        document.getElementById("openimg").style.display = "none";
    }

    function opendetailsForm() {
        document.getElementById("details").style.display = "block";
    }

    function closedetailsForm() {
        document.getElementById("details").style.display = "none";
    }


    function openchangepasswordForm() {
        document.getElementById("changepassword").style.display = "block";
    }

    function closechangepasswordForm() {
        document.getElementById("changepassword").style.display = "none";
    }
</script>
<?php
include('footer.php'); // for comman footer

?>