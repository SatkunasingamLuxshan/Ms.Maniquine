<?php
include('header.php');
?>
   <title>Party Wear</title>
<style>
    <?php include 'Style.css' ?>.ta {

        background: rgba(101, 55, 226, 0.08) !important;


    }

    .ta {

        background: rgba(101, 55, 226, 0.01) !important;


    }

    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;

    }

    .shadow {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
    }

    .container:hover .image {
        opacity: 0.3;
    }

    .container:hover .middle {
        opacity: 1;
    }



    .section {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .section-title {
        position: relative;
        margin-bottom: 30px;
        margin-top: 15px;
    }

    .section-title .title {
        display: inline-block;
        text-transform: uppercase;
        margin: 0px;
    }

    .section-title .section-nav {
        float: right;
    }

    .section-title .section-nav .section-tab-nav {
        display: inline-block;
    }

    .section-tab-nav li {
        display: inline-block;
        margin-right: 15px;
    }

    .section-tab-nav li:last-child {
        margin-right: 0px;
    }

    .section-tab-nav li a {
        font-weight: 700;
        color: #8D99AE;
    }

    .section-tab-nav li a:after {
        content: "";
        display: block;
        width: 0%;
        height: 2px;
        background-color: #D10024;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .section-tab-nav li.active a {
        color: #D10024;
    }

    .section-tab-nav li a:hover:after,
    .section-tab-nav li a:focus:after,
    .section-tab-nav li.active a:after {
        width: 100%;
    }

    .section-title .section-nav .products-slick-nav {
        top: 0px;
        right: 0px;
    }
/*  */
    .scrollbar {
        background-color: lightblue;

        height: 520px;
        overflow: auto;
    }

    a:hover {
        color: hotpink;
    }
</style>



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


<!--Shop body part start-->
<?php

$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_title AND  product_cat='Party wear'";
$run_query = mysqli_query($con, $product_query);

$sql = "SELECT * FROM products ORDER BY product_id";
$result = mysqli_query($con, $sql);
?>



<?php
include('Itemnav.php'); // for comman catg nav bar
?>
<div class="container">
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
</div>

<div class="container scrollbar" style=" margin-top:20px;  background:rgba(200, 150, 222, -1)">

    <div class="row">
        <?php

        while ($row = mysqli_fetch_array($run_query)) {
            $pro_cat   = $row['product_title'];
            $pro_image = $row['filename'];

            $price = $row['product_price']; ?>
            <div class="col-3">


                <!-- <div class="card ta  " style="width: 15rem; margin:10px ">
                    <p style="text-align:center;">      <img src="product_images/<?php echo  $pro_image; ?>" alt="" class="card-img-top center " style=" width:170px; height: 170px; background:white;"></p>
                        <div class="cardblock " style="color: green;background-color:rgba(101, 55, 226, 0.01) !important ">
                            <h4 class="card-title"> <?php echo  $pro_cat; ?></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque!</p>
                           <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4"></div>
                            <div class="col-4"></div>
                           </div>
                            <a href="#" class="btn btn-primary" >buy me !</a>

                        </div>

                    </div> -->
                    <tbody id="myTable">
  <tr>
    <td>

      <div class="card border shadow" style="width: 15rem; margin:10px; background:rgba(116, 127, 224, 0.45)">
        <div class="card-header bg-transparent border"><a href="product_description.php?id=<?php echo $row['product_id'] ;?>"> <img src="../product_images/<?php echo  $pro_image; ?>" alt="" class="card-img-top"style=" height: 210px;"></a></div>
        <div class="card-body text-white " style="min-height: 130px;">

          <h5 class="card-title text-center" style="text-transform: capitalize"><?php echo strtoupper($pro_cat); ?></h5>
          <p class="card-text text-center "> Price:<?php echo  $price; ?></p>

        </div>
        <div class="card-footer bg-transparent border">
         <a href="product_description.php?id=<?php echo $row['product_id'] ;?>" name="a" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white;"></i>Add Cart</a>
         <a href="wishlist_store.php?id=<?php echo $row['product_id'] ;?>" class="btn btn-success"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
      
      
         </div>
     
      </div>
    </td>
  </tr>
</tbody>
</table>



            </div>
        <?php
        }
        ?>

    </div>


</div>
<!--Shop body part end-->


<div style="margin-top: 30px;">
<?php
include('footer.php'); // for footer
?>
</div>