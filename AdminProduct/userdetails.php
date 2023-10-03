<?php
include('adminhead.php');
?>

<style>
    .ta {

        background: rgba(101, 55, 226, 0.08) !important;


    }
</style>
<?php
ob_start();
require_once "../config.php";

$query = "SELECT * FROM users ORDER BY userid DESC";
$query_run = mysqli_query($con, $query);

?>

<div class="col-8 col-sm-8" style="margin-top: 35px;">

    <div class="mx-auto pull-right">
        <div class="input-group">

            <input class="form-control" id="myInput" type="text" placeholder="Search.." style="  font-family: 'Playfair Display', serif;">
            <a href="userdetails.php" class=" ">

                <button class="btn btn-danger " type="button" title="Refresh page">
                    <span class="fas fa-sync-alt"></span>
                </button>
            </a>
        </div>

    </div>


    <div class="card ta " style="width:1000px">
        <div class="card-header " style="background-color:#6CB2EB;">

            <div>
                <h3 class="card-title" style="color:#ffff; font-weight: bold; font-size:24px;  font-family: 'Playfair Display', serif;">USER DETAILS</h3>
            </div>





        </div>
        <div class="card-body table-responsive p-0  " style="height: 400px; ">

            <table class="table table-striped projects report table-hover  table-head-fixed text-nowrap" style="  font-family: 'Playfair Display', serif;">
                <thead style="font-size:larger">
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Address</th>

                    </tr>
                </thead>

                <?php
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                        <tbody style="background:rgba(41, 83, 243, 0.27)!important;" id="myTable">
                            <tr>
                                <td style="width: 100px;">

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img src="../product_images/<?php echo $row["filename"]; ?> " style="width:60px;height:60px;border-radius: 20px;">

                                        </li>

                                    </ul>



                                </td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phoneno']; ?></td>
                                <td><?php echo $row['address']; ?></td>
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

            <!--pagination  
                    <div class="pagination_section">
                        <a href="#"><< Previous</a>
                        <a href="#" title="Algorithm">1</a>
                        <a href="#" title="DataStructure">2</a>
                        <a href="#" title="Languages">3</a>
                        <a href="#" title="Interview" class="active">4</a>
                        <a href="#" title="practice">5</a>
                        <a href="#">Next >></a>
                    </div>-->




        </div>

    </div>
</div>
</div>
<?php
include('adminfooter.php'); // comman footer for the page
?>