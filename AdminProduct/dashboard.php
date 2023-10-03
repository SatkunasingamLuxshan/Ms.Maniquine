<?php
include('adminhead.php');
?>

<title>DashBoard</title>

<style>
   
    .homesearch {

        height: 50px;
        background-color: rgb(206, 200, 200);
        margin-left: 5px;
        margin-top: 2px;
        align-items: right;
        padding-left: 480px;
    }

    .homesearch input[type="search"] {

        background: transparent;
        height: 35px;
        width: 450px;
        color: #fff;
        font-size: 16px;
    }

    .dbbox {

        height: 480px;
        background-color: rgb(206, 200, 200);
        margin-left: 5px;
        margin-top: 10px;
        padding-top: 13px;


    }

    .dbboxtop {
        width: 980px;
        height: 220px;
        background-color: rgb(255, 255, 255);
        margin-left: 5px;
    }

    .dbboxleft {
        width: 48%;
        height: 200px;
        background-color: rgb(255, 255, 255);
        margin-top: 20px;
        float: left;
        margin-left: 5px;
        margin-right: 18px;
    }

    .dbboxright {
        width: 49%;
        height: 200px;
        background-color: rgb(255, 255, 255);
        margin-top: 20px;
        float: left;

    }
</style>

<div class="righta">
    <div class="homesearch">
        <form>
            <input type="search" placeholder="Search.." name="homesearch">
            <button type="submit"><img src="../img/ser.png" name="homesearchbtn" style="width:25px; height:25px; alt:search; margin-top:0px;"></button>
        </form>
    </div>
    <div class="dbbox">
    <div class="dbboxtop">
                    <text style="padding-left:15px;">Project Activity</text>
                    <?php
                            ob_start();
                            require_once "../config.php";
                            $conn=mysqli_connect("localhost","root","","Maniquine");
                            

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 

                            $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
                            $conn->query($sql);

                            $sql = "SELECT visits FROM Counter WHERE id = 1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $visits = $row["visits"];
                                }
                            } else {
                                echo "<center><p style='margin-top:75px;'>No Results!</p></center>";
                            }
                            
                            $conn->close();
                        ?>
                        <!--Have to do a Graph-->
                    </div>
        <div class="dbboxleft">
                    <text style="padding-left:15px;">Messages <img src="../img/noti.png" alt="" style="height: 40px;"></text>
                    <?php
                    ob_start();
                    require_once "../config.php";
                    $connection=mysqli_connect("localhost","root","","maniquine");
                    $query="SELECT review FROM feedback ORDER BY feedback_id DESC LIMIT 5";
                    $query_run=mysqli_query($connection,$query);
                    
                ?>
                
                <table border="1" style="width:90%;  margin-left:25px; margin-top:15px" bgcolor="silver">
                   
                    <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php echo $row['review']; ?></td>
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
                    <div class="dbboxright">
                    <text style="padding-left:15px;">Top Products</text>
                    <?php
                    ob_start();
                    require_once "../config.php";
                    $connection=mysqli_connect("localhost","root","","Maniquine");
                    $query1="SELECT DISTINCT name FROM cart ORDER BY cartid DESC LIMIT 5";
                    $query_run=mysqli_query($connection,$query1);
                    
                ?>
                
                <table border="1" style="width:90%;  margin-left:25px; margin-top:15px" bgcolor="silver">
                   
                    <?php
                        if(mysqli_num_rows($query_run) >0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    

                </table>

                    </div>
    </div>
</div>

</div>

<?php
include('adminfooter.php'); // comman footer for the page
?>