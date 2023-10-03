    <!-- HEADER FROM adminhead.php -->
    <?php
    include('adminhead.php');
    ?>
    <title>Item Index</title>

    <style>
        .ta {

            background: rgba(101, 55, 226, 0.08) !important;


        }
    </style>

    <!-- SQL QUERY-->
    <?php
    $sql = "SELECT * FROM `products` ORDER BY product_id  DESC";
    $result = mysqli_query($con, $sql);
    ?>


    <!-- SEARCH FOR TABLE -->
    <div class="col-8 col-sm-8" style="margin-top: 35px;">

        <div class="mx-auto pull-right">



            <div class="input-group">

                <input class="form-control" id="myInput" type="text" placeholder="Search.." style="  font-family: 'Playfair Display', serif;">
                <a href="itemindex.php" class=" ">

                    <button class="btn btn-danger " type="button" title="Refresh page">
                        <span class="fas fa-sync-alt"></span>
                    </button>
                </a>
            </div>

        </div>




        <!--  TABLE -->

        <div class="card ta " style="width:1000px">
            <div class="card-header " style="background-color:#6CB2EB;">

                <div>
                    <h3 class="card-title" style="color:#ffff; font-weight: bold; font-size:24px;  font-family: 'Playfair Display', serif;">ITEMS</h3>
                </div>





            </div>
            <div class="card-body table-responsive p-0  " style="height: 400px; ">
                <table class="table table-striped projects  table-hover  table-head-fixed text-nowrap" style="  font-family: 'Playfair Display', serif;">
                    <thead style="font-size:larger ">
                        <tr>
                            <th style="width: 1%">
                                ID
                            </th>
                            <th style="width: 6%">
                                IMAGE
                            </th>
                            <th style="width: 10%" class="text-center">
                                TITLE NAME
                            </th>
                            <th style="width:5%">
                                PRICE
                            </th>
                            <th style="width: 6%">
                                CATEGORY
                            </th>
                            <th style="width: 5%">
                                SMALL
                            </th>

                            <th style="width: 5%">
                                MEDIUM
                            </th>
                            <th style="width: 5%">
                                LARGE
                            </th>

                            <th style="width: 49% ;" class="text-center">
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <tbody style="background:rgba(41, 83, 243, 0.27)!important;" id="myTable">




                            <tr>
                                <td class=" text-center"><?php echo $row["product_id"]; ?></td>
                                <td style="width: 100px;">

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img src="../product_images/<?php echo $row["filename"]; ?> " style="width:60px;height:60px;border-radius: 20px;">

                                        </li>

                                    </ul>



                                </td>
                                <td class=" text-center"><?php echo $row["product_title"]; ?></td>
                                <td class=" text-center"><?php echo $row["product_price"]; ?></td>
                                <td class=" text-center"><?php echo $row["product_cat"]; ?></td>
                                <td class=" text-center"><?php echo $row["small"]; ?></td>

                                <td class=" text-center"><?php echo $row["medium"]; ?></td>
                                <td class=" text-center"><?php echo $row["large"]; ?></td>
                                <td class="project-actions text-center">




                                    <form action="delete.php?id=<?php echo $row['product_id']; ?>" method="post">


                                        <a class="btn btn-primary btn-sm  " href="show.php?id=<?php echo $row['product_id']; ?>">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm  " href="edit.php?id=<?php echo $row['product_id']; ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>

                                        <button type="submit" value="Delete" class="btn btn-danger fas fa-trash">Delete</button>


                                    </form>

                                </td>
                            </tr>
                        </tbody>

                    <?php
                    }
                    ?>

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

        <div class="row">

            <div class="col-md-10">

                <input type="button" value="GoBack" onclick="history.back()" class="btn btn-primary btn-md " style="font-size: larger; font-family: 'Playfair Display', serif;" id="btn_shadow">
            </div>


        </div>

    </div>
    </div>

    <?php
    include('adminfooter.php'); // comman footer for the page
    ?>