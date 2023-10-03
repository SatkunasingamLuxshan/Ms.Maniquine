<?php
include('header.php');
?>
<style>
    <?php include 'Style.css' ?>
    .scrollbar {
        background-color: lightblue;

        height: 520px;
        overflow: auto;
    }
</style>
<?php
$email = $_SESSION['username'];
$sql1 = "SELECT * FROM wishlist WHERE user='$email' ";
$result1 = mysqli_query($con, $sql1);


// $sql = "SELECT * FROM products ";
// $result = mysqli_query($con, $sql); 
?>

<?php
include('temp.php');
?>


<div class="container scrollbar" style=" margin-top:100px; background:rgba(200, 150, 222, -1)">
    <div class="row">
        <?php
        while ($row1 = mysqli_fetch_array($result1)) {
            $pname = $row1['name'];
            $product_id = $row1['product_id'];
            $sql = "SELECT * FROM products WHERE product_id='$product_id'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $pro_cat   = $row['product_title'];
                $pro_image = $row['filename'];
                $id1 = $row['product_id'];
                $price = $row['product_price']; ?>

                <div class="col-3">








                    <form action="product_description.php?id=<?php echo $row['product_id']; ?>" method="POST">

                        <div class="card border shadow" style="width:200px ; margin:10px; background:rgba(116, 127, 224, 0.45)">
                            <div class="card-header bg-transparent border"><a href="product_description.php?id=<?php echo $row['product_id']; ?>"> <img src="../product_images/<?php echo  $pro_image; ?>" alt="" class="card-img-top" style=" height: 170px;"></a></div>
                            <div class="card-body text-white " style="min-height: 130px;">

                                <h5 class="card-title text-center" style="text-transform: capitalize"><?php echo strtoupper($pro_cat); ?></h5>
                                <p class="card-text text-center "> Price:<?php echo  $price; ?></p>

                            </div>
                            <div class="card-footer bg-transparent border">
                                <?php  ?>
                                <button type="submit" value="submit" name="submit2" class="btn btn-success"><i class="fas fa-shopping-bag" aria-hidden="true" style="color: white;"></i>Buy</button>
                                <a href="#" class="btn btn-success"><i class="fa fa-heart" aria-hidden="true"></i></i></a>


                            </div>

                        </div>
                    </form>
                </div>



        <?php
            }
        }
        ?>

    </div>
</div>
</div>

<!-- 
 -->


<?php
include('footer.php'); // for comman footer
?>