<?php
// Start the session
session_start();
?>
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "maniquine";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);



// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

<style>



.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<body style="height: 100%;">
    <div class="body">
        <div class="top_page_nav" style="background:black">
            <!--Main div for Header-->
            <div class="top_page_nav_left">
                <!--Left side header part-->

                <?php 

if (!empty($_SESSION['username'])) {
    $uname = $_SESSION['username'];

                   $sql10 = "SELECT * FROM `users`  WHERE email='$uname' ";
                   $result10 = mysqli_query($con, $sql10);
                   $row10= mysqli_fetch_array($result10);

                if($row10["usertype"]=='admin') { ?>
                    <a href="../AdminProduct/createitem.php">Ms.Lady</a>
              <?php  } else { ?>
                <a href="index.php">Ms.Lady</a>
            <?php  }
               } else{?>

<a href="index.php">Ms.Lady</a>
              <?php }?>
           
            </div>
            <div class="top_page_nav_right">
                <!--Right side header part-->
                <div class="main">
                    <!--Div for navigation-->
                    <ul class="mainnav">
                        <!--Div for navigation list-->
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="our_services.php">Our Services</a></li>
                        <li><a href="our_work.php">Our Work</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li>
                            <div class="dropdown" id="button" style="margin-left:200px;">
                            <?php        if (!empty($_SESSION['username'])) {?>

                                <input type="image" src="../img/cart.png" class="hoverimg" title="Cart" name="cart" width="25" height="25" onclick="window.location.href='Add_cart.php';" alt="cart">
                          <?php  }
                                    else{?>
                                   
                                        <input type="image" src="../img/cart.png" class="hoverimg" title="Cart" name="cart" width="25" height="25"  alt="cart">
                                 <?php   } ?>
                            
                                <!--<button class="dropbtn"></button>-->

                                <?php
                                if (!empty($_SESSION['username'])) {
                                    $uname = $_SESSION['username'];




                                    $sql = "SELECT `name` FROM cart  WHERE username='$uname' ORDER BY cartid ";
                                    $sql1 = "SELECT * FROM `users`  WHERE email='$uname' ";
                                    $result1 = mysqli_query($con, $sql1);
                                    $row1 = mysqli_fetch_array($result1);
                                    if ($result = mysqli_query($con, $sql)) {
                                        // Return the number of rows in result set
                                        $rowcount = mysqli_num_rows($result);

                                        // Free result set

                                    }
                                ?>
                                    <div class="dropdown-content">

                                        <p style="color: white;"><?php echo $rowcount ?></p>

                                    </div>
                                <?php     } ?>
                            </div>
                        </li>

                        <li>
 
                            <div class="dropdown" id="button">
 
                            <?php
                                if (!empty($_SESSION['username'])) {?>
                                    <input type="image" src="../product_images/<?php echo $row1["filename"]; ?>" class="hoverimg" title="Cart" name="cart" width="25" height="25"  alt="cart" style="border-radius: 70px;">
                             
                             
                             <?php  }
                              else{?>

                                <input type="image" src="../img/account1.png" name="account" width="25" height="25" alt="account">
                             <?php }
                              ?>
                            
                               

                                <!--<button class="dropbtn"></button>-->
                                <div class="dropdown-content">
                                    <?php if (!empty($_SESSION['username'])) { ?>

                                        <a href="Settings.php">Setting</a>
                                        <a href="logout.php">Logout</a>
                                    <?php } else { ?>
                                        <a href="login.php">Login</a>
                                    <?php } ?>


                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>

    </div>