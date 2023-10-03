<?php
include('header.php');
?>
<title>Product Description</title>
<style>
    <?php include 'Style.css' ?>img {
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
<?php


if (isset($_POST['submit2'])) {

    $id  = $_GET['id'];

    $sql = "SELECT * FROM products WHERE product_id= $id ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if (isset($_GET['id'])) {
        $id1 = $_GET['id'];
        $sql = "DELETE  FROM wishlist WHERE product_id = $id1";
        $result = mysqli_query($con, $sql);
    }
}

if (isset($_GET['id'])) {

    $id  = $_GET['id'];

    $sql = "SELECT * FROM products WHERE product_id= $id ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    if (!empty($_SESSION['username'])) {
        $username1 = $_SESSION['username'];

        if (isset($_POST['submit3'])) {
            $id1 = $_GET['id'];
            $sql = "DELETE  FROM cart WHERE (product_id ='$id1') AND (username='$username1')";
            $result = mysqli_query($con, $sql);
        }
    }
}

?>

<body>

    <div class="jumbotron" style="width: 1000px;  border: 1px solid rgba(76, 41, 214, 1);
        border-radius: 4px;
        padding: 5px; margin-top:6%; margin-left:160px;
 ">
        <div class="container row">
            <div class="col-6" style="margin-bottom:10% ;margin-top:5%;">

                <img src="../product_images/<?php echo $row["filename"]; ?>" alt="vj" style="height:300px; width:300px ;margin-left:100px">

            </div>

            <div class="col-5" style="margin-bottom:10% ;margin-top:4%;">
                <h3 style="text-transform:uppercase ;font-weight: bold;"> <?php echo $row["product_title"]; ?></h3>
                <i class="fa fa-star" aria-hidden="true" style="font-size: 12px; color:#D10024"></i>
                <i class="fa fa-star" aria-hidden="true" style="font-size: 12px; color:#D10024"></i>
                <i class="fa fa-star" aria-hidden="true" style="font-size: 12px; color:#D10024"></i>
                <i class="fa fa-star" aria-hidden="true" style="font-size: 12px; color:#D10024"></i>

                <i class="fa fa-star" aria-hidden="true" style="font-size: 12px; color:#D10024"></i>
                <span style="margin-left: 10px; "> 10 Review(s) | Add your review</span> </br>
                <span style="font-size: 24px; color:#D10024 ;font-weight: bold;"> LKR <?php echo  $row["product_price"]; ?></span></br>
                <span style="font-size: 14px; color:#D10024 ;font-weight: bold;margin-left: 0px; color:rgba(29, 120, 29, 0.83);"> IN STOCK</span>
                <?php
                if ($row["small"] <= 0) { ?>
                    <span style="font-size: 14px; color:#D10024 ;font-weight: bold;margin-left: 10px;"> S : <?php echo $row["small"]; ?></span>
                <?php } else { ?>
                    <span style="font-size: 14px; color:rgba(29, 120, 29, 0.83) ;font-weight: bold;margin-left: 10px;"> S : <?php echo $row["small"]; ?></span>
                <?php  }
                ?>


                <?php
                if ($row["medium"] <= 0) { ?>
                    <span style="font-size: 14px; color:#D10024 ;font-weight: bold;margin-left: 10px;"> M : <?php echo $row["medium"]; ?></span>
                <?php } else { ?>
                    <span style="font-size: 14px; color:rgba(29, 120, 29, 0.83) ;font-weight: bold;margin-left: 10px;">M: <?php echo $row["medium"]; ?></span>
                <?php  }
                ?>

                <?php
                if ($row["large"] <= 0) { ?>
                    <span style="font-size: 14px; color:#D10024 ;font-weight: bold;margin-left: 10px;"> L : <?php echo $row["large"]; ?></span>
                <?php } else { ?>
                    <span style="font-size: 14px; color:rgba(29, 120, 29, 0.83) ;font-weight: bold;margin-left: 10px;">L: <?php echo $row["large"]; ?></span>
                <?php  }
                ?>

                </br>
                <span style="font-size: 14px;font-weight: bold; "> <?php echo $row["description"]; ?></span></br>



                <form action="addcardbtn.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row["product_id"]; ?>">

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-2">
                            <label for="cat_title" style="font-size: 18px;">SIZE</label>
                        </div>

                        <select name="cat_title" id="cat_title" class="form-control" style="width: 100px; ">

                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>


                        </select>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-2">
                            <label for="quandity" style="font-size: 18px;">QTY</label>
                        </div>

                        <select name="quandity" id="quandity" class="form-control" style="width: 100px; ">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>


                        </select>





                    </div>




                    <div style="margin-top: 17px;">
                        <?php

                        if (!empty($_SESSION['username'])) {
                        ?>
                            <button type="submit" value="submit" name="dissub" class="btn btn-primary" id="btn_shadow_form"> <i class="fas fa-shopping-bag"></i>Buy</button>
                            <a href="card.php?id=<?php echo $row['product_id']; ?>" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white;"></i>Add Cart</a>
                        <?php }
                        ?>
                        <?php if (empty($_SESSION['username'])) { ?>
                            <a href="login.php" class="btn btn-primary"><i class="fas fa-shopping-bag" aria-hidden="true" style="color: white;"></i>Buy</a>
                            <a href="login.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white;"></i>Add Cart</a>

                        <?php   } ?>

                    </div>


                </form>
            </div>


        </div>



    </div>
    <script>
        function openForm() {
            document.getElementById("message").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>








</body>

<?php
include('footer.php'); // for footer
?>