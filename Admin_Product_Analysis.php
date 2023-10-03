<!doctype html>
<html>

<head>
<style>
        <?php include 'AdminStyle.css' ?>
    </style>
    
    <title>Admin Product Analysis</title>  
  
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
            <div >
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