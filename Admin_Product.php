<!DOCTYPE html>
<html>

<head>
   
    <title>Admin Product</title>

    <script>
        function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontentproduct, tablinkproduct;
  tabcontentproduct = document.getElementsByClassName("tabcontentproduct");
  for (i = 0; i < tabcontentproduct.length; i++) {
    tabcontentproduct[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinkproduct = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinkproduct.length; i++) {
    tablinkproduct[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
        </script>
        <style>
             
#Add{
	
}
#Update{
	
}
#View{
	
}

<?php include 'AdminStyle.css' ?>
     </style>
</head>

<body>
    <div class="body">
        <div class="top_page">
            <!--Main div for Header-->
            <div class="top_page_left">
                <!--Left side header part-->
                <a href="index.php">Ms.Maniquine</a>
            </div>
            <div class="top_page_right">
                <!--Right side header part-->
                <div class="main">
                    <!--Div for navigation-->
                    <ul class="mainnav">
                        <!--Div for icon  list-->
                        <li style="padding-left: 765px;"> <input type="image" class="hoverimg" title="Notification"  src="bellicon.png" name="notification"
                                width="25" height="25" alt="notification" onclick="window.location.href='Admin_Review.php';"></li>
                         <li><div class="dropdown" id="button">
                                <input type="image" src="account1.png" name="account" width="25" height="25" alt="account">

                                <!--<button class="dropbtn"></button>-->
                                <div class="dropdown-content">
                                    <a href="Admin_Settings.php">Setting</a>
                                    <a href="logout.php">Logout</a>
                                </div>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="containera">
            <div class="lefta">
                <div>
                    <!--Div for left bar nav-->
                    <ul class="leftnav">
                        <!--Div for navigation list-->
                        <li><a href="Admin_Home.php">Dashboard</a></li>
                        <li><a href="Admin_Users.php">Users</a></li>
                        <li><a href="Admin_Product.php">Products</a></li>
                        <li><a href="Admin_Product_Analysis.php">Product Analysis</a></li>
                        <li><a href="Admin_Transaction.php">Transactions</a></li>
                        <li><a href="Admin_Review.php">Reviews</a></li>
                        <li><a href="Admin_Orders.php">Orders</a></li>
                        <li><a href="Admin_Task_lists.php">Task Lists</a></li>
                        <li><a href="Admin_Report.php">Report</a></li>
                        <li><a href="Admin_Settings.php">Settings</a></li>
                    </ul>
                </div>
            </div>
            <div class="righta">
            <button class="tablinkproduct" onclick="openPage('Add', this,'rgb(16, 16, 37)')" id="defaultOpen">Add Product</button>
<button class="tablinkproduct" onclick="openPage('Update', this)" >Update</button>
<button class="tablinkproduct" onclick="openPage('View', this)">View</button>



    
<div id="Add" class="tabcontentproduct">
    <div class="product">
        <div class="productleft">
            <form action="" method="POST" enctype="multipart/form-data">
                <h1>Add Product</h1>
                <label>Product Name</label><br>
                <input type="text" name="productname"><br>
                <label>Description</label><br>
                <input type="text" name="description"><br>
                <label>Units in stock</label><br>
                <input type="text" name="unit"><br>  
                <label>Price</label><br>
                <input type="text" name="price"><br>  
        </div>
        <div class="productright">
        <label>Category</label><br>
        <select>
                <option>Kids</option>
                <option>Ladies</option>
                <option>Party</option>
                <option>Saree Blouse</option>
                <option>Frocks</option>
        </select><br><br>
        <label>Image</label>
        <label for="file-upload" class="imagelbl">
        <img src="clou.png" ></label>
        <input id="file-upload" type="file"/><br>
        <input type="submit" name="add" value="ADD">
        </form>    
    </div>
        
    </div>

    
</div>

<div id="Update" class="tabcontentproduct">
<div class="product">
        <div class="productleft">
            <form action="" method="POST" enctype="multipart/form-data">
                <h1>Update/ Delete</h1>
                <label>Product Name</label><br>
                <input type="text" name="productname"><br>
                <label>Description</label><br>
                <input type="text" name="description"><br>
                <label>Units in stock</label><br>
                <input type="text" name="unit"><br>  
                <label>Price</label><br>
                <input type="text" name="price"><br>  
        </div>
        <div class="productright">
        <input type="search" placeholder="Search.." name="productsearch">
      <button type="submit"><img src="search.png" name="productsearchbtn" style="width:25px; height:25px; alt:search; margin-top:0px;"></button>
        <label>Category</label><br>
        <select>
                <option>Kids</option>
                <option>Ladies</option>
                <option>Party</option>
                <option>Saree Blouse</option>
                <option>Frocks</option>
        </select><br><br>
        <label>Image</label>
        <label for="file-upload" class="imagelbl">
        <img src="clou.png" ></label>
        <input id="file-upload" type="file"/><br>
        <input type="submit" name="update" value="UPDATE">
        <input type="submit" name="delete" value="DELETE">
        </form>    
    </div>
</div>
</div>

<div id="View" class="tabcontentproduct">

</div>
 </div>
</div>


<!-- body part end-->
    <!--Footer start-->
    <div class="admin_last_part">
    <p class="admin_copyrights">Copyright © 2021. All Rights Reserved by Ms.Maniquine.</p>
    </div>
     <!--Footer end-->
</body>
</html>


<?php
    require_once "config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["add"])){
    
     
            // Validate username
            if(empty(trim($_POST["username"]))){
                $username_err = "Please enter a username.";
            } else{
                // Prepare a select statement
                $sql = "SELECT id FROM users WHERE username = ?";
                
                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_username);
                    
                    // Set parameters
                    $param_username = trim($_POST["username"]);
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        /* store result */
                        mysqli_stmt_store_result($stmt);
                        
                        if(mysqli_stmt_num_rows($stmt) == 1){
                            $username_err = "This username is already taken.";
                        } else{
                            $username = trim($_POST["username"]);
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
    
                    // Close statement
                
                }
            }
            
            // Validate password
            if(empty(trim($_POST["password"]))){
                $password_err = "Please enter a password.";     
            } elseif(strlen(trim($_POST["password"])) < 6){
                $password_err = "Password must have atleast 6 characters.";
            } else{
                $password = trim($_POST["password"]);
            }
            
            // Validate confirm password
            if(empty(trim($_POST["confirm_password"]))){
                $confirm_password_err = "Please confirm password.";     
            } else{
                $confirm_password = trim($_POST["confirm_password"]);
                if(empty($password_err) && ($password != $confirm_password)){
                    $confirm_password_err = "Password did not match.";
                }
            }
            
            // Check input errors before inserting in database
            if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
                
                // Prepare an insert statement
                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                
                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
                    
                    // Set parameters
                    $param_username = $username;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Redirect to login page
                        header("location: index.html");
                    } else{
                        echo "Something went wrong. Please try again later.";
                    }
    
                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
        
            // Close connection
        } 
    } 
?>