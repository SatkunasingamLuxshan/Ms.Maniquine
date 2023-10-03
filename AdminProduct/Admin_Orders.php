<?php
include('adminhead.php');
?>
<title>Order Details</title>
<style>
    .ta {

        background: rgba(101, 55, 226, 0.08) !important;


    }
</style>
<?php
ob_start();
require_once "../config.php";

$query = "SELECT * FROM `order` ORDER BY orderid DESC";
$query_run = mysqli_query($con, $query);

?>

<div class="col-8 col-sm-8" style="margin-top: 35px;">

    <div class="mx-auto pull-right">
        <div class="input-group">

            <input class="form-control" id="myInput" type="text" placeholder="Search.." style="  font-family: 'Playfair Display', serif;">
            <a href="Admin_Orders.php" class=" ">

                <button class="btn btn-danger " type="button" title="Refresh page">
                    <span class="fas fa-sync-alt"></span>
                </button>
            </a>
        </div>

    </div>


    <div class="card ta " style="width:1000px">
        <div class="card-header " style="background-color:#6CB2EB;">

            <div>
                <h3 class="card-title" style="color:#ffff; font-weight: bold; font-size:24px;  font-family: 'Playfair Display', serif;">ORDERS</h3>
            </div>





        </div>
        <div class="card-body table-responsive p-0  " style="height: 400px; ">

            <table class="table table-striped projects report table-hover  table-head-fixed text-nowrap" style="  font-family: 'Playfair Display', serif;">
                <thead style="font-size:larger">
                    <tr>
                        <th>Order ID</th>
                        <th>User ID</th>
                        <th>Product ID</th>
                        <th>Deliver Status</th>
                        <th>Total Price</th>
                        <th>Order Date</th>
                        <th>Deliver Date</th>
                        <th>Quantity</th>
                        <th>Shipping ID</th>

                    </tr>
                </thead>

                <?php
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                        <tbody style="background:rgba(41, 83, 243, 0.27)!important;" id="myTable">
                            <tr>
                                <td><?php echo $row['orderid']; ?></td>
                                <td><?php echo $row['userid']; ?></td>
                                <td><?php echo $row['productid']; ?></td>
                                <td><?php echo $row['deliverstatus']; ?></td>
                                <td><?php echo $row['totalprice']; ?></td>
                                <td><?php echo $row['orderdate']; ?></td>
                                <td><?php echo $row['deliverdate']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['shippingid']; ?></td>
                            </tr>
                        </tbody>
                <?php
                    }
                } else {
                    echo "No Record Found";
                }
                ?>
                </tbody>

            </table>
            <script>
                $(document).ready(function() {
                    $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myTable tr").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>

         



        </div>

    </div>
</div>
</div>
<?php
include('adminfooter.php'); // comman footer for the page
?>