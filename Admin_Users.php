<!doctype html>
<html>

<head>
<style>
     <?php include 'AdminStyle.css' ?>
    </style>
    
    <title>Admin Users</title>  
  
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
                <!--View all user's detail*/-->
                <?php
                    $connection=mysqli_connect("localhost","root","","demo111");
                    $query="SELECT * FROM users";
                    $query_run=mysqli_query($connection,$query);
                   // $searchqry = "SELECT * from users where  `created_at` >= DATE_SUB(CURDATE(), INTERVAL 15 DAY)";
                ?>
                <div class="titlecontainer">
                    <div class="titleleft">
                        <h3>User Details</h3>
                    </div>
                    <div class="rightsearch">
                    <form action="Admin_Users.php" method="POST" > 
                        
                        <select name="days[]">
                            <option>Last 15 days </option> 
                            <option>Last 30 days </option>
                        </select>
                        <button type="submit" name="reviewsearchbtn"><img src="search.png"  style="width:20px; height:20px; alt:search; "></button>
                    <?php
                        /*$days15="SELECT * from users where  fullname like 'm%' ";
                        //$days30="SELECT * from user where  `created_at` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
                        if(isset($_POST['reviewsearchbtn']))             
                        { 
                            if(!empty($_POST['days[]'])) {
                                //$selected = $_POST['days[]'];
                                  if($_POST['days[0]']=="Last 15 days")
                                    {
                                        echo $days15;
                                    }
                                    else{
                                        echo $days30;
                                    }
                                }else {
                                echo 'Please select the value.';
                            }
                        }*/
                        ?>



        
                    </form>
                    </div>
                </div>
                 
                <table  border="1" class="report" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            
                            <th>Created at</th>
                            <th>Edit/ Delete</th>
                          
                        </tr>
                    </thead>
                    <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo  $row['created_at']; ?></td>

                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>

                </table>
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